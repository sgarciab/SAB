<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$servicio->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Servicio</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Proveedor</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateServicio')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $servicio->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>
    
    <div class=" span-4">
        <?php echo Form::label("proveedor", "Proveedor (relacionado):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("proveedor", '', array('id' => 'proveedor', 'class' => 'span-5')); ?>
             <?php echo Form::hidden("proveedorh", $contacto->Cliente_idCliente, array('id' => 'proveedorh', 'class' => 'span-5')); ?>
        </div>        
    </div>

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("descripcion", "Descripcion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("descripcion", $servicio->descripcion, array('id' => 'direccion', 'class' => 'textareaastextarea')); ?>
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
            //,
            //            submitHandler: function (form) {
            //                $('#save').attr('disabled','disabled'); 
            //                form.submit();
            //            }
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

