<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$proveedor->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Proveedor</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Proveedor</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateProveedor')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $proveedor->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("direccion", "Direccion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-4 last">
        <?php echo Form::textarea("direccion", $proveedor->direccion, array('id' => 'direccion', 'class' => 'span-5')); ?>
    </div>	

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("ruc", "RUC:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("ruc", $proveedor->RUC, array('id' => 'ruc', 'class' => 'span-5')); ?>
    </div>		

</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("telefono1", "Telefono Compa&ntilde;&iacute;a", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("telefono1", $proveedor->telefono1, array('id' => 'telefono1', 'class' => 'span-5')); ?>
        </div>        
    </div>
    
    <div class="prepend-1 span-4">
        <?php echo Form::label("movil1", "Movil Trabajo", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("movil1", $proveedor->movil1, array('id' => 'movil1', 'class' => 'span-5')); ?>
        </div>        
    </div>
    
    <div class="span-4">
        <?php echo Form::label("telefono2", "Telefono Convencional", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("telefono2", $proveedor->telefono2, array('id' => 'telefono2', 'class' => 'span-5')); ?>
        </div>        
    </div>
    
    <div class="prepend-1 span-4">
        <?php echo Form::label("movil2", "Movil Personal", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("movil2", $proveedor->movil2, array('id' => 'movil2', 'class' => 'span-5')); ?>
        </div>        
    </div>

</div>



<?php if (!$proveedor->id) { ?>
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
            if($("#frmCreateProveedor").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateProveedor").submit();
               
            }
        }); 
	    

    });


</script>

