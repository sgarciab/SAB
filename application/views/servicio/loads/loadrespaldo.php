
    <div id="rowinformacion_<?php echo $cont; ?>" class="span-19 last line" >
        <div class="span-21 last line subtitle ">Informaci&oacute;n <?php echo $cont ?></div>
        <div class="span-5  line"> <?php echo Form::label('frecuencia_'.$cont,'Frecuencia:',array('class'=>'span-3')); echo  Form::select('frecuencia_'.$cont,$_frecuencia,null,array('id'=>'frecuencia_'.$cont,'class'=>'span-4'));  ?></div>
        <div class="span-5  line"><?php echo Form::label('fechainicio_'.$cont,'Fecha Inicio:',array('class'=>'span-3')); echo  Form::input('fechainicio_'.$cont,null,array('id'=>'fechainicio_'.$cont,'class'=>'span-4')); ?></div>
        <div class="span-5  line"><?php echo Form::label('fechafin_'.$cont,'Fecha Fin:',array('class'=>'span-3')); echo  Form::input('fechafin_'.$cont,null,array('id'=>'fechafin_'.$cont,'class'=>'span-4')); ?></div>
        <div id="wadd_<?php echo $cont; ?>"> <?php echo Form::button('addarchivo', 'Añadir Archivo', array('class'=>'span-3 custom-button')) ?>  </div>
        <div id="archivoadded_<?php echo $cont; ?>" class="span-21 last line">
        
        </div>
        <div id="wcounter_<?php echo $cont; ?>"> <?php echo Form::hidden('counter_'.$cont,'0') ?>  </div>
        <div class="edit" ><img id="removeinformacion_<?php echo $cont; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
    </div>


