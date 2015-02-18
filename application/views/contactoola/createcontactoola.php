<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

<?php if (!$contactoOla->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Contacto OLA</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Contacto OLA</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateContactoOla')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombreContactoOla", "Nombre de la Persona Contacto:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombreContactoOla", $contactoOla->nombreContacto, array('id' => 'nombreContactoOla', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("documentoLegalOla", "Documento Legal", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("documentoLegalOla", $contactoOla->documentoLegal, array('id' => 'documentoLegalOla', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>

<div class="prepend-2 span-20 append-2 line last">

    <div class=" span-4">
        <?php echo Form::label("relacionOla", "OLA relacionado:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("relacionOla", '', array('id' => 'relacionOla', 'class' => 'span-5')); ?>
            <?php echo Form::hidden("relacionOlah", $contactoOla->OLA_idOLA, array('id' => 'relacionOlah', 'class' => 'span-5')); ?>
        </div>        
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("direccionOla", "Direccion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("direccionOla", $contactoOla->direccion, array('id' => 'direccionOla', 'class' => 'span-5')); ?>
    </div>
    
</div>
    


    
     <div class="prepend-2 span-20 append-2 line last">
                 <div class="span-4 ">
                     <?php echo Form::label("addInformacionContactoOla", "Añadir Informaci&oacute;n:", array('class' => 'span-4')); ?>
                 </div>
                 <div class="span-4 ">
                     <?php echo Form::button("addInformacionContactoOla", "Añadir", array('class' => 'span-4 button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only','id'=>'addInformacionContactoOla')); ?>
                 </div>
     </div>
             <?php echo Form::hidden("cont", "0", array('id' => 'cont', 'class' => 'span-4')); ?>

    <div class="prepend-2 span-20 append-2">
        <div id="table_informacion" class="span-21">
          <div id='bodyinformacion'class="span-20">
          </div>
        </div>
    </div>
    
    <div id="container_place" hidden="" >

    </div>
    
    

<?php if (!$contactoOla->id) { ?>
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
        $("#frmCreateContactoOla").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                nombreContactoOla:{
                    maxlength: 255,
                    required:true
                    
                },
                documentoLegal:{
                   required:true,
                   remote:{
                       url: document_root + 'contactoOla/checkIdentificacion',
                       type: 'post',
                       data:{
                           documento: function(){
                               return $("#documentoLegal").val();
                           }
                       } 
                   }
                },
                relacionOlah:{
                   required:true
                }
            },
            messages:{
                documentoLegal:{
                    remote:"Número de documento ya asignado"
                }
            }
          
            //,
            //            submitHandler: function (form) {
            //                $('#save').attr('disabled','disabled'); 
            //                form.submit();
            //            }
        });

        $("#save").click(function(e){
            e.preventDefault();
            if($("#frmCreateContactoOla").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateContactoOla").submit();
               
            }
        }); 
        
//        $("#empresa").focusout(function(){
//            alert('SI');
//        });
       
        $("#relacionOla").autocomplete(document_root+"contactoola/autocompleterola",{
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
				
                $('#relacionOlah').val(row[0]);
                $('#relacionOla').val(row[0]);
            }else
            {
                $('#relacionOlah').val('');	
                $('#relacionOlah').val('');
            }
        });
        
          $("#documentoLegal").focusout(function(){
              $(this).valid();
          });
        
        
        $("#addInformacionContactoOla").click(function(ev){
        ev.preventDefault();
        var val= parseInt($("#cont").val())+1;
        loadinformacion(parseInt($("#cont").val())+1,"");
        });
        
        
       function loadinformacion(cont,id){
            $("#container_place").load(document_root + "ContactoOla/loadinformacion", {
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

