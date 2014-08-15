<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$ola->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo OLA</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n OLA</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateOla')); ?>

    
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

</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4 ">
        <?php echo Form::label("descripcion", "Descripci&oacute;n:", array('class' => 'span-4')); ?>
    </div>
    <div class="span-4 ">
        <?php echo Form::textarea("descripcion", "Descripci&oacute;n", array('class' => 'span-4','id'=>'descripcion')); ?>
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
        $("#frmCreateProveedor").validate({
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
            if($("#frmCreateOla").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateOla").submit();
               
            }
        }); 	       
        
    });


</script>

