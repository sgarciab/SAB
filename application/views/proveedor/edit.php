<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$proveedor->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Editar Proveedor</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Proveedor</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmEditProveedor')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <?php echo Form::hidden('id', $proveedor->id, array('id'=>'id')); ?>
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $proveedor->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("identificacion", "Identificaci&oacute;n:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("identificacion", $proveedor->identificacion, array('id' => 'identificacion', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>

<div class="prepend-2 span-20 append-2 line last">

    <div class=" span-4">
        <?php echo Form::label("direccion", "Direcci&oacute;n:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("direccion", $proveedor->direccion, array('id' => 'direccion', 'class' => 'span-5')); ?>           
        </div>        
    </div>	

</div>
       
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4 ">
        <?php echo Form::label("addInformacion", "Añadir Informaci&oacute;n:", array('class' => 'span-4')); ?>
    </div>
    <div class="span-4 ">
        <?php echo Form::button("addInformacion", "Añadir", array('class' => 'span-4 button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only','id'=>'addInformacion')); ?>
    </div>
</div>
           

<div class="prepend-2 span-20 append-2">
    <div id="table_informacion" class="span-21">
      <div id='bodyinformacion'class="span-20">
          <?php $count=1; ?>
           <?php foreach ($proveedor->infoproveedores->find_all() as $item): ?>
               <div id="rowinformacion_<?php echo $count; ?>" class="span-19 last line" >
                <?php echo Form::hidden("id_".$count, $item->id, array('id' => 'id_'.$count, 'class' => 'span-4')); ?>
               <div class="span-21 last line subtitle ">Informaci&oacute;n <?php echo $count ?></div>
               <div class="span-6  line"> <?php echo Form::label('tipo_'.$count,'Tipo:',array('class'=>'span-4')); echo  Form::select('tipo_'.$count,$_tipo,$item->tipo,array('id'=>'tipo_'.$count,'class'=>'span-5'));  ?></div>
               <div class="span-6  line"><?php echo Form::label('contenido_'.$count,'Contenido:',array('class'=>'span-4')); echo  Form::input('contenido_'.$count,$item->contenido,array('id'=>'contenido_'.$count,'class'=>'span-5')); ?></div>
               <div class="span-6  line"> <?php echo Form::label('observacion_'.$count,'Observaci&oacute;n:',array('class'=>'span-4')); echo Form::textarea('observacion_'.$count,$item->observacion,array('id'=>'observacion_'.$count,'class'=>'span-5 textareaasinput'));  ?></div>
               <div id="informacionadded_<?php echo $count; ?>" class="span-21 last line"></div>
               <div class="edit" ><img id="removeinformacion_<?php echo $count; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
           </div>
                <?php $count++ ?>
        <?php endforeach; ?>

      </div>
    </div>
</div>
    
<?php echo Form::hidden("cont", --$count, array('id' => 'cont', 'class' => 'span-4')); ?>
    
<div id="container_place" hidden="" >

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
        $("#frmEditProveedor").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                nombre:{
                    maxlength: 255,
                    required:true
                    
                },
                identificacion:{
                   required:true,
                   maxlength: 13,
                   remote:{
                       url: document_root + 'proveedor/checkIdentificacion',
                       type: 'post',                       
                       data:{
                           documento: function(){
                               return $("#identificacion").val();
                           },
                           id: function(){
                               return $("#id").val();
                           }
                       } 
                   }
                }
            },
            messages:{
                identificacion:{
                    remote:"Número de documento ya asignado"
                }
            }
          
            //,
            //            submitHandler: function (form) {
            //                $('#save').attr('disabled','disabled'); 
            //                form.submit();
            //            }
        });
        
        
        
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
                
                $('img[id*="removeinformacion_"]').each(function(){
                    $(this).click(function(){
                        var cont = $(this).attr("id");
                        cont=cont.split('_');
                        $('#rowinformacion_'+cont[1]).remove();
                    }); 
                });
                

        

        $("#save").click(function(e){
            e.preventDefault();
            if($("#frmEditProveedor").valid()){
                $('#save').attr('disabled',true);  
                $("#frmEditProveedor").submit();
               
            }
        }); 
        
//        $("#empresa").focusout(function(){
//            alert('SI');
//        });               
        
        
        $("#addInformacion").click(function(ev){
        ev.preventDefault();
        var val= parseInt($("#cont").val())+1;
        loadinformacion(parseInt($("#cont").val())+1,"");
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

