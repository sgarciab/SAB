
    <div id="rowarchivo_<?php echo $cont.'_'.$innercount; ?>" class="span-18 last line" >
        <div class="span-18 last line subtitle ">Archivo de Respaldo <?php echo $innercount; ?></div>
        <div class="span-4  line"><?php echo Form::label('fechacreacion_'.$cont.'_'.$innercount,'Fecha Creación:',array('class'=>'span-3')); echo  Form::input('fechacreacion_'.$cont.'_'.$innercount,date('d-m-Y H:i:s'),array('id'=>'fechacreacion_'.$cont.'_'.$innercount,'class'=>'span-4','readonly')); ?></div>
        <div class="span-4  line"><?php echo Form::label('autor_'.$cont.'_'.$innercount,'Autor:',array('class'=>'span-3')); echo  Form::input('autor_'.$cont.'_'.$innercount,null,array('id'=>'autor_'.$cont.'_'.$innercount,'class'=>'span-4')); ?></div>
        <div class="span-9  line"><?php echo Form::label('archivo_'.$cont.'_'.$innercount,'Archivo:',array('class'=>'span-3')); echo  Form::file('archivo_'.$cont.'_'.$innercount,array('id'=>'archivo_'.$cont.'_'.$innercount,'class'=>'span-9')); ?></div>
        <div class="edit" ><img id="removearchivo_<?php echo $cont.'_'.$innercount; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
    </div>


