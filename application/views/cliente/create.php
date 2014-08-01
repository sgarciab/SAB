<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$cliente->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Cliente</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Cliente</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateCliente')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $cliente->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("nombreComercial", "Nombre Comercial", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("nombreComercial", $cliente->nombreComercial, array('id' => 'nombreComercial', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("RUC", "RUC:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("RUC", $cliente->RUC, array('id' => 'RUC', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("direccion", "Direccion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("direccion", $cliente->direccion, array('id' => 'direccion', 'class' => 'span-5')); ?>
    </div>	

</div>


<?php if (!$cliente->id) { ?>
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
        $("#frmCreateCliente").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                nombre:{
                    maxlength: 255,
                    required:true
                    
                },
                nombreComercial:{
                   required:true
                },
                RUC:{
                   required:true,
                   maxlenght:16
                },
                direccion:{
                   required:true,
                   minlenght:10
                }
            },
            messages: {
                nombre: {
                    required:'Es requerido'
                }
            }
            //,
            //            submitHandler: function (form) {
            //                $('#save').attr('disabled','disabled'); 
            //                form.submit();
            //            }
        });

        $("#save").click(function(){
            if($("#frmCreateCliente").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateCliente").submit();
               
            }
        }); 
	    

    });


</script>

