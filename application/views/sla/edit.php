<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

<?php if (!$sla->id) { ?>
    <div class="prepend-2 span-20 append-2 last">
        <h2>Actualizar SLA</h2>
        <div class="required-fields">* Campos obligatorios</div>
    </div>
<?php } else { ?>
    <center><div id="info_title">Informaci&oacute;n SLA</div></center>
<?php } ?>

<?php echo Form::open(NULL, array('id' => 'frmEditSla')); ?>

    
<div class="prepend-2 span-20 append-2 line last">
    
    
    <div class="span-4">
        <?php echo Form::label("responsable", "Responsable:", array('class' => 'left')); ?>
    </div>
    <div class="span-5 last">
        <?php echo Form::input("responsable", $sla->responsable,  array('id' => 'criticidad', 'class' => 'span-5')); ?>
    </div>
    
    <div class=" prepend-1 span-4">
        <?php echo Form::label("criticidad", "Criticidad:", array('class' => 'left')); ?>
    </div>
    <div class="span-5 last">
        <?php echo Form::select("criticidad", $sla->opCriticidad, null, array('id' => 'criticidad', 'class' => 'span-5')); ?>
    </div>
    
</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("tiempoRespuesta", "Tiempo de Respuesta:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        
        <?php
        
        echo Form::input("tiempoRespuesta", $sla->tiempoRespuesta, array('id' => 'tiempoRespuesta', 'class' => 'span-5')); ?>
    </div>    	
    <div class="span-5 last">        
        <?php echo Form::select("medTiempo", $sla->medida, null, array('id' => 'medTiempo', 'class' => 'span-2')); ?>
    </div>

</div>
    
<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("proveedor", "Servicio:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">        
        <?php echo Form::input("servicio", $sla->servicio->Nombre, array('id' => 'servicio', 'class' => 'span-5')); ?>
        <?php echo Form::hidden("servicioh", $sla->Servicio_idServicio, array('id' => 'servicioh', 'class' => 'span-5')); ?>
    </div>    	
    
    
    <div class=" prepend-1 span-4">
        <?php echo Form::label("disponibilidad", "Disponibilidad:", array('class' => 'left')); ?>
    </div>
    <div class="span-5 last">
        <?php echo Form::input("disponibilidad", $sla->disponibilidad,  array('id' => 'disponibilidad', 'class' => 'span-5')); ?>
    </div>
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4 ">
        <?php echo Form::label("descripcion", "Descripcion", array('class' => 'span-4')); ?>
    </div>
    <div class="span-4 ">
        <?php echo Form::textarea("descripcion", $sla->descripcion, array('class' => 'textareaastextarea','id'=>'descripcion')); ?>
    </div>
</div>

<?php if (!$sla->id) { ?>
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
        $("#frmEditSla").validate({
            onfocusout: false,
            onkeyup: false,
            wrapper: "label",
            rules: {
                criticidad:{
                    required:true                    
                },
                responsable:{
                    required:true                    
                },
                tiempoRespuesta:{
                    required:true                    
                },
                servicioh:{
                    required:true                    
                },
                descripcion:{
                    required:true                    
                }
                
            },
            
        });

        $("#save").click(function(){
            if($("#frmEditSla").valid()){
                $('#save').attr('disabled',true);  
                $("#frmEditSla").submit();
            }
        });
        
        $("#servicio").autocomplete(document_root+"generic/autocompleterservicio",{
            max: 16,
            scroll: false,
            matchContains:true,
            minChars: 1,
            selectFirst:false,
            delay:1,
            formatItem: function(row) {
                if(row[0]!='0'){
                    return row[0]+'  /  '+row[1];
                }
                else{
                       $('#servicioh').val('');
                    return 'No existen resultados';
                }
            }
        }).result(function(event, row) {
            if(row[1]!='0'){
				
                $('#servicioh').val(row[0]);
                $('#servicio').val(row[1]);
            }else
            {
                $('#servicioh').val('');	
                $('#servicio').val('');
            }
        });
        
        
        $("#servicio").focusout(function(){
            var temp = $(this).val().trim() ;
      
            if (temp==''){
                $('#empresah').val('');	
            }
          });
    });


</script>

