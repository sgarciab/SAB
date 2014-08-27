<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$ola->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Editar OLA</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n OLA</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmEditOla')); ?>



<div class="prepend-2 span-20 append-2 line last">
    
    <div class="span-4">
        <?php echo Form::label("criticidad", "Criticidad:", array('class' => 'left')); ?>
    </div>
    <div class="span-5 last">
        <?php echo Form::select("criticidad", $ola->opCriticidad, null, array('id' => 'criticidad', 'class' => 'span-5')); ?>
    </div>
    
</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("tiempoRespuesta", "Tiempo de Respuesta:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        
        <?php
        
        // Tiempo de respuesta deberia ser un input de tiempo - Queda pendiente
        
        echo Form::input("tiempoRespuesta", $ola->tiempoRespuesta, array('id' => 'tiempoRespuesta', 'class' => 'span-5')); ?>
    </div>    	
    <div class="span-5 last">        
        <?php echo Form::select("medTiempo", $ola->medida, null, array('id' => 'medTiempo', 'class' => 'span-2')); ?>
    </div>

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("proveedor", "Servicio Proveedor (OLA):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">        
        <?php echo Form::input("proveedor", '', array('id' => 'proveedor', 'class' => 'span-5')); ?>
        <?php echo Form::hidden("proveedorh", $ola->ServicioProveedor_idServicioProveedor, array('id' => 'proveedorh', 'class' => 'span-5')); ?>
    </div>    	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4 ">
        <?php echo Form::label("descripcion", "Descripcion", array('class' => 'span-4')); ?>
    </div>
    <div class="span-4 ">
        <?php echo Form::textarea("descripcion", $ola->descripcion, array('class' => 'textareaastextarea','id'=>'descripcion')); ?>
    </div>
</div>

<?php if (!$ola->id) { ?>
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
        $("#frmEditOla").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                criticidad:{
                    required:true                    
                },
                tiempoRespuesta:{
                    required:true                    
                },
                descripcion:{
                    required:true                    
                }
                
            },
            
        });

        $("#save").click(function(){
            if($("#frmEditOla").valid()){
                $('#save').attr('disabled',true);  
                $("#frmEditOla").submit();
               
            }
        });
        
        $("#proveedor").autocomplete(document_root+"ola/autocompleterproveedor",{
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
                $('#proveedor').val(row[2]);
            }else
            {
                $('#proveedorh').val('');	
                $('#proveedor').val('');
            }
        });
        
    });

</script>

