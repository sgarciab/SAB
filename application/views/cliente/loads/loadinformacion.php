
    <div id="rowinformacion_<?php echo $cont; ?>" class="span-19 last line" >
        <div class="span-21 last line subtitle ">Informaci&oacute;n <?php echo $cont ?></div>
        <div class="span-6  line"> <?php echo Form::label('tipo_'.$cont,'Tipo:',array('class'=>'span-4')); echo  Form::select('tipo_'.$cont,$_tipo,null,array('id'=>'tipo_'.$cont,'class'=>'span-5'));  ?></div>
        <div class="span-6  line"><?php echo Form::label('contenido_'.$cont,'Contenido:',array('class'=>'span-4')); echo  Form::input('contenido_'.$cont,null,array('id'=>'contenido_'.$cont,'class'=>'span-5')); ?></div>
        <div class="span-6  line"> <?php echo Form::label('observacion_'.$cont,'Observaci&oacute;n:',array('class'=>'span-4')); echo Form::textarea('observacion_'.$cont,null,array('id'=>'observacion_'.$cont,'class'=>'span-5 textareaasinput'));  ?></div>
        <div id="informacionadded_<?php echo $cont; ?>" class="span-21 last line"></div>
        <div class="edit" ><img id="removeinformacion_<?php echo $cont; ?>" src="<?php echo URL::site('media/images/remove.png') ?>"> </div>
    </div>


