<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

<?php if (!$servicio->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Servicio</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Servicio</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateServicio')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $servicio->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>

</div>

<?php if (!$servicio->id) { ?>
    <div class="prepend-2 span-4">
        <?php echo Form::label("proveedor", "Proveedor (relacionado):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("proveedor", '', array('id' => 'proveedor', 'class' => 'span-5')); ?>
             <?php echo Form::hidden("proveedorh", $servicio->Proveedor_idProveedor, array('id' => 'proveedorh', 'class' => 'span-5')); ?>
        </div>        
    </div>
<?php } else { ?>
    <div class="prepend-2 span-4">
        <?php echo Form::label("proveedor", "Proveedor (relacionado):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("proveedor", $servicio->proveedor->nombre, array('id' => 'proveedor', 'class' => 'span-5')); ?>
             <?php echo Form::hidden("proveedorh", $servicio->Proveedor_idProveedor, array('id' => 'proveedorh', 'class' => 'span-5')); ?>
        </div>        
    </div>
<?php } ?>    
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("descripcion", "Descripcion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("descripcion", $servicio->descripcion, array('id' => 'descripcion', 'class' => 'textareaastextarea')); ?>
    </div>		

</div>

<?php if (!$servicio->id) { ?>
    <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
       <?php echo Form::button("save", "Guardar", array('id' => 'save','class'=>'custom-button')); ?>
    </div>
<?php } else { ?>
    <div class="span-20 append-2 line last center" style="margin-top:30px">
         <?php echo Form::button("save", "Actualizar", array('id' => 'save','class'=>'custom-button')); ?>
    </div>
<?php } ?>

<?php echo Form::close(); ?>

<script>
    $(document).ready(function(){
	
        /*VALIDATIONS*/
        $("#frmCreateServicio").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                nombre:{
                    required:true                    
                },
                identificacion:{
                   required: true,
                   remote:{
                       url: document_root + 'ServicioProveedor/checkIdentificacion',
                       type: 'post',
                       data:{
                           id: function(){
                               return $("#identificacion").val();
                           }
                       } 
                   }
                }                
                
            },
            messages: {
               identificacion:{
                   remote:'Identificación ya existe'
               }
            }
        });
        
        $("#proveedor").autocomplete(document_root+"servicioproveedor/autocompleterservicio",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 1,
            selectFirst:false,
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[1]+'  /  '+row[2];
                }
                else{
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[1]!='0'){
				
                $('#proveedorh').val(row[0]);
                $('#proveedor').val(row[1]);
            }else
            {
                $('#proveedorh').val('');	
                $('#proveedor').val('');
            }
        });                

        $("#save").click(function(){
            if($("#frmCreateServicio").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateServicio").submit();
               
            }
        }); 
        
        $("#identificacion").focusout(function(){
           $(this).valid(); 
        });
        
    });


</script>

