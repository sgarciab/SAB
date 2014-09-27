<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo HTML::style('media/css/controllers/admin/product.css'); ?>
<?php if (!$servicio->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Nuevo Servicio</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n del Servicio</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmCreateServicio','enctype' => 'multipart/form-data')); ?>



<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("nombre", $servicio->Nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
    </div>	

    <div class="prepend-1 span-4">
        <?php echo Form::label("empresa", "Cliente:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
         <?php echo Form::input("empresa",  $servicio->cliente->nombre, array('id' => 'empresa', 'class' => 'span-5')); ?>
             <?php echo Form::hidden("empresah", $servicio->Cliente_idCliente, array('id' => 'empresah', 'class' => 'span-5')); ?>
        </div>        
    </div>	

</div>

  
     <div class="prepend-2 span-20 append-2 line last">
                 <div class="span-4 ">
                     <?php echo Form::label("addAgregarRespaldo", "Añadir Pol&iacute;tica de Respaldo:", array('class' => 'span-4')); ?>
                 </div>
                 <div class="span-4 ">
                     <?php echo Form::button("addAgregarRespaldo", "Añadir", array('class' => 'span-4 button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only','id'=>'addAgregarRespaldo')); ?>
                 </div>
     </div>
             <?php echo Form::hidden("cont", "0", array('id' => 'cont', 'class' => 'span-4')); ?>

    <div class="prepend-2 span-20 append-2">
        <div id="table_respaldo" class="span-21">
          <div id="bodyrespaldo" class="span-20">
          </div>
        </div>
    </div>
    
    <div id="container_place" hidden="" >

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
                    maxlength: 255,
                    required:true
                    
                },
                empresah:{
                   required:true
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
            if($("#frmCreateServicio").valid()){
                $('#save').attr('disabled',true);  
                $("#frmCreateServicio").submit();
               
            }
        }); 
        
        
        $("#empresa").autocomplete(document_root+"generic/autocompletercliente",{
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
        
        
          $("#empresa").focusout(function(){
            var temp = $(this).val().trim() ;
      
            if (temp==''){
                $('#empresah').val('');	
            }
          });
	    
        $("#addAgregarRespaldo").click(function(ev){
        ev.preventDefault();
        var val= parseInt($("#cont").val())+1;
        loadrespaldo(parseInt($("#cont").val())+1,"");
        });
        
        
       function loadrespaldo(cont,id){
            $("#container_place").load(document_root + "servicio/loadrespaldo", {
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

                
                $("#fechainicio_"+cont).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    minDate:"0", 
                   // yearRange: "-70+0",
                    dateFormat: "dd/mm/yy",
                    dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                    monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
                    onClose: function( selectedDate ) {
                        $( "#fechafin_"+cont ).datepicker( "option", "minDate", selectedDate );
                    }
                }); 

                //Date picker
                $("#fechafin_"+cont).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    minDate: "0",
                  //  yearRange: "-70+0",
                    dateFormat: "dd/mm/yy",
                    dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                    monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
                    onClose: function( selectedDate ) {
                        $( "#fechainicio_"+cont ).datepicker( "option", "maxDate", selectedDate );
                    }
                });
                //fin validaciones 2



                $("#bodyrespaldo").append($("#rowinformacion_"+cont));
                $("#container_place").html('');
                $("#cont").val(parseInt($("#cont").val())+1);
                
                
                //boton cerrar
                $('#removerespaldo_'+cont).click(function(){
                    
                    $('#rowrespaldo_'+cont).remove();
                });
                
                
                $("#addarchivo_"+cont).click(function(ev){
                ev.preventDefault();
                loadarchivo(cont,parseInt($("#counter_"+cont).val())+1);
                });
                
                
            });
        };   
            
            
            
        function loadarchivo(cont,innercount){
            $("#container_place").load(document_root + "servicio/loadarchivo", {
                cont: cont,
                innercount: innercount
            }, function() {
                
                //fin validaciones 2

                $("#archivoadded_"+cont).append($("#rowarchivo_"+cont+'_'+innercount));
                $("#container_place").html('');
                $("#counter_"+cont).val(parseInt($("#counter_"+cont).val())+1);
                
                
                //boton cerrar
                $('#removearchivo_'+cont+'_'+innercount).click(function(){
                    
                    $('#rowarchivo_'+cont+'_'+innercount).remove();
                });
                
            });
        };     
            

    });


</script>

