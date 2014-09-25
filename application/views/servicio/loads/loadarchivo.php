
    <div id="rowarchivo_<?php echo $cont.'_'.$innercount; ?>" class="span-19 last line" >
        <div class="span-21 last line subtitle ">Informaci&oacute;n <?php echo $cont.'_'.$innercount; ?></div>
        <div class="span-5  line"><?php echo Form::label('fechacreacion_'.$cont.'_'.$innercount,'Fecha Creación:',array('class'=>'span-3')); echo  Form::input('fechacreacion_'.$cont.'_'.$innercount,null,array('id'=>'fechacreacion_'.$cont.'_'.$innercount,'class'=>'span-4')); ?></div>
        <div class="span-5  line"><?php echo Form::label('autor_'.$cont.'_'.$innercount,'Autor:',array('class'=>'span-3')); echo  Form::input('autor_'.$cont.'_'.$innercount,null,array('id'=>'autor_'.$cont.'_'.$innercount,'class'=>'span-4')); ?></div>
        <div class="span-5  line"><?php echo Form::label('archivo_'.$cont.'_'.$innercount,'Archivo:',array('class'=>'span-3')); echo  Form::file('archivo_'.$cont.'_'.$innercount,array('id'=>'archivo_'.$cont.'_'.$innercount,'class'=>'span-4')); ?></div>
        <div class="edit" ><img id="removearchivo_<?php echo $cont; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
    </div>


