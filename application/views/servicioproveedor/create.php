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

<?php echo Form::open(NULL, array('id' => 'frmCreateProveedor')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $servicio->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>		

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("descripcion", "Descripcion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("descripcion", $servicio->descripcion, array('id' => 'direccion', 'class' => 'span-5')); ?>
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
        $("#frmCreateProveedor").validate({
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
                       url: document_root + 'proveedor/checkIdentificacion',
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
                   remote:'Esa identificación ya existe'
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
	
        $("#addInformacionProveedor").click(function(ev){
        ev.preventDefault();
        var val= parseInt($("#cont").val())+1;
        loadinformacion(parseInt($("#cont").val())+1,"");
        });
        
        
        $("#identificacion").focusout(function(){
           $(this).valid(); 
        });
        
       function loadinformacion(cont,id){
            $("#container_place").load(document_root + "proveedor/loadinformacion", {
                cont: cont
            }, function() {
                
                $('input[id*="contenido_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });

                

                $('select[id*="tipo_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });


                //fin validaciones 2



                $("#bodyinformacion").append($("#rowinformacion_"+cont));
                $("#container_place").html('');
                $("#cont").val(parseInt($("#cont").val())+1);
                
                
                //boton cerrar
                $('#removeinformacion_'+cont).click(function(){
                    
                    $('#rowinformacion_'+cont).remove();
                });
                
                
            });
        };
	   
        
        
        

    });


</script>

