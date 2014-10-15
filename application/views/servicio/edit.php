<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

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
            

    <div class="prepend-2 span-20 append-2">
        <div id="table_respaldo" class="span-21">
          <div id="bodyrespaldo" class="span-20">
              
                  <?php $count=1; ?>
               <?php foreach ($servicio->respaldo->find_all() as $item): ?>
                   <div id="rowinformacion_<?php echo $count; ?>" class="span-19 last line" >
                    
                    <div class="span-21 last line subtitle ">Informaci&oacute;n <?php echo $count ?></div>
                    <div class="span-5  line"> <?php echo Form::label('frecuencia_'.$count,'Frecuencia:',array('class'=>'span-3')); echo  Form::select('frecuencia_'.$count,$_frecuencia,null,array('id'=>'frecuencia_'.$count,'class'=>'span-4'));  ?></div>
                    <div class="span-5  line"><?php echo Form::label('fechainicio_'.$count,'Fecha Inicio:',array('class'=>'span-3')); echo  Form::input('fechainicio_'.$count,null,array('id'=>'fechainicio_'.$count,'class'=>'span-4','readonly')); ?></div>
                    <div class="span-5  line"><?php echo Form::label('fechafin_'.$count,'Fecha Fin:',array('class'=>'span-3')); echo  Form::input('fechafin_'.$count,null,array('id'=>'fechafin_'.$count,'class'=>'span-4','readonly')); ?></div>
                    <div id="wadd_<?php echo $count; ?>"> <?php echo Form::button('addarchivo_'.$count, 'Añadir Archivo', array('id'=>'addarchivo_'.$count,'class'=>'span-3 button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only')) ?>  </div>
                    <div id="archivoadded_<?php echo $count; ?>" class="span-21 last line">
                        
                             <?php $innercount=1; ?>
                           <?php foreach ($item->archivo->find_all() as $archivo): ?>
                                    <div id="rowarchivo_<?php echo $count.'_'.$innercount; ?>" class="span-18 last line" >
                                    <div class="span-18 last line subtitle ">Archivo de Respaldo <?php echo $innercount; ?></div>
                                    <div class="span-4  line"><?php echo Form::label('fechacreacion_'.$count.'_'.$innercount,'Fecha Creación:',array('class'=>'span-3')); echo  Form::input('fechacreacion_'.$count.'_'.$innercount,date('d-m-Y H:i:s'),array('id'=>'fechacreacion_'.$count.'_'.$innercount,'class'=>'span-4','readonly')); ?></div>
                                    <div class="span-4  line"><?php echo Form::label('autor_'.$count.'_'.$innercount,'Autor:',array('class'=>'span-3')); echo  Form::input('autor_'.$count.'_'.$innercount,null,array('id'=>'autor_'.$count.'_'.$innercount,'class'=>'span-4')); ?></div>
                                    <div class="span-9  line"><?php echo Form::label('archivo_'.$count.'_'.$innercount,'Archivo:',array('class'=>'span-3')); echo  Form::file('archivo_'.$count.'_'.$innercount,array('id'=>'archivo_'.$count.'_'.$innercount,'class'=>'span-9')); ?></div>
                                    <div class="edit" ><img id="removearchivo_<?php echo $count.'_'.$innercount; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
                                    </div>
                        
                            <?php $innercount++; ?>
                           <?php endforeach; ?>
                        
                    </div>
                    <div id="wcounter_<?php echo $count; ?>"> <?php echo Form::hidden('counter_'.$count,--$innercount,array('id'=>'counter_'.$count)) ?>  </div>
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
                
                
                $('button[id*="addarchivo_"]').each(function(){
                    $(this).click(function(ev){
                        ev.preventDefault();
                        var cont = $(this).attr("id");
                        cont=cont.split('_');
                        loadarchivo(cont[1],parseInt($("#counter_"+cont[1]).val())+1);
                    }); 
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
                
                $('input[id*="fechainicio_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });

                

                $('input[id*="fechafin_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });

                
                $("#fechainicio_"+cont).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    minDate:"0", 
                   // yearRange: "-70+0",
                    dateFormat: "yy-mm-dd",
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
                    dateFormat: "yy-mm-dd",
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
                
                $('input[id*="autor_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });
                
                $('input[id*="archivo_"]').each(function(){
                    $(this).rules("add", {
                        required: true

                    });
                });
                
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

