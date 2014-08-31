<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$contacto->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Contacto</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Contacto</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateContacto')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombreContacto", "Nombre de la Persona Contacto:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombreContacto", $contacto->nombreContacto, array('id' => 'nombreContacto', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("documentoLegal", "Documento Legal", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("documentoLegal", $contacto->documentoLegal, array('id' => 'documentoLegal', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>

<div class="prepend-2 span-20 append-2 line last">

    <div class=" span-4">
        <?php echo Form::label("empresa", "Contacto de(opcional):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("empresa", '', array('id' => 'empresa', 'class' => 'span-5')); ?>
             <?php echo Form::hidden("empresah", $contacto->Cliente_idCliente, array('id' => 'empresah', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("empresaActual", "Empresa Actual(opcional):", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("empresaActual", $contacto->empresaActual, array('id' => 'RUC', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("direccion", "Direccion:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::textarea("direccion", $contacto->direccion, array('id' => 'direccion', 'class' => 'span-5')); ?>
    </div>	

</div>

    
     <div class="prepend-2 span-20 append-2 line last">
                 <div class="span-4 ">
                     <?php echo Form::label("addInformacionContacto", "Añadir Informaci&oacute;n:", array('class' => 'span-4')); ?>
                 </div>
                 <div class="span-4 ">
                     <?php echo Form::button("addInformacionContacto", "Añadir", array('class' => 'span-4 button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only','id'=>'addInformacionContacto')); ?>
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
    
    

<?php if (!$contacto->id) { ?>
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
        $("#frmCreateContacto").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                nombreContacto:{
                    maxlength: 255,
                    required:true
                    
                },
                documentoLegal:{
                   required:true,
                   remote:{
                       url: document_root + 'cliente/checkIdentificacion',
                       type: 'post',
                       data:{
                           documento: function(){
                               return $("#documentoLegal").val();
                           }
                       } 
                   }
                },
                empresah:{
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
            if($("#frmCreateContacto").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateContacto").submit();
               
            }
        }); 
        
//        $("#empresa").focusout(function(){
//            alert('SI');
//        });
       
        $("#empresa").autocomplete(document_root+"cliente/autocompletercliente",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 1,
            selectFirst:false,
            delay:1,
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[1]+'  /  '+row[2];
                }
                else{
                       $('#empresah').val('');
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[1]!='0'){
				
                $('#empresah').val(row[0]);
                $('#empresa').val(row[2]);
            }else
            {
                $('#empresah').val('');	
                $('#empresa').val('');
            }
        });
        
          $("#documentoLegal").focusout(function(){
              $(this).valid();
          });
        
        
          $("#empresa").focusout(function(){
            var temp = $(this).val().trim() ;
      
            if (temp==''){
                $('#empresah').val('');	
            }
          });
        
        $("#addInformacionContacto").click(function(ev){
        ev.preventDefault();
        var val= parseInt($("#cont").val())+1;
        loadinformacion(parseInt($("#cont").val())+1,"");
        });
        
        
       function loadinformacion(cont,id){
            $("#container_place").load(document_root + "cliente/loadinformacion", {
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

