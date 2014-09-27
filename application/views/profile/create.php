<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>

<div class="prepend-2 span-20 append-2 last">
    <h2><?php echo ($profile->id ? "Actualizar" : "Nuevo") ?> Perfil</h2>
    <div class="required-fields">* Campos obligatorios</div>
</div>

<?php echo Form::open(NULL, array('id' => 'frmCreateProfile')); ?>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-8">
        <?php echo Form::label("name", "* Nombre:", array('class' => 'right')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("name", $profile->name, array('id' => 'name', 'class' => 'span-5')); ?>
        </div>        
    </div>	
</div>
<?php if ($profile->id): ?>
    <div class="prepend-2 span-20 append-2 line last">	
        <div class="span-8">
            <?php echo Form::label("status", "* Estado:", array('class' => 'right')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::select("status", $status_values, $profile->status, array('id' => 'status', 'class' => 'span-5')); ?>
        </div>	
    </div>
<?php endif ?>

<div class="prepend-2 span-20 append-2 line last">	
    <div class="span-8">
        <?php echo Form::label("functions", "* Funciones:", array('class' => 'right')); ?>
    </div>	
</div>
<div class="prepend-2 span-20 append-2 line last">
    <?php
    $i = 0;
    foreach ($grandpa as $parent) {
        ?>
        <?php if (($parent->id) < 10) $x = '0' . $parent->id; else $x = $parent->id; ?>
        <div class="prepend-7  span-4">
            <?php echo Form::label($parent->name, $parent->name, array('class' => 'left')); ?>
        </div>
        <div class="prepend-2 span-2">
            <?php echo Form::checkbox('element[' . $i . ']', $parent->id, in_array($parent->id, $a) ? TRUE : FALSE, array('id' => 'element_' . $x, 'class' => 'left', 'level' => '1')); ?>
        </div>
        <?php echo Form::hidden('cont_' . $parent->id, '', array('id' => 'cont_' . $parent->id)); ?>
        <?php $i++; ?>
        <?php
        $parent_actions = ORM::factory('Action')->where('parent_id', '=', $parent->id)->find_all();
        foreach ($parent_actions as $son) {
            ?>
            <?php if (($son->id) < 10) $y = '0' . $son->id; else $y = $son->id; ?>
            <div class="prepend-8  span-4">
                <?php echo Form::label($son->name, $son->name, array('class' => 'left')); ?>
            </div>
            <div class="prepend-1 span-2">
                <?php echo Form::checkbox('element[' . $i . ']', $son->id, in_array($son->id, $a) ? TRUE : FALSE, array('id' => 'element_' . $x . '_' . $y, 'class' => 'left', 'level' => '2')); ?>
            </div>
            <?php echo Form::hidden('cont_' . $x . '_' . $y, '', array('id' => 'cont_' . $x . '_' . $y)); ?>
            <?php $i++ ?>
            <?php $son_actions = ORM::factory('Action')->where('parent_id', '=', $son->id)->find_all(); ?>
            <?php foreach ($son_actions as $action) { ?>
                <?php if (($action->id) < 10) $z = '0' . $action->id; else $z = $action->id; ?>

                <div class="prepend-9  span-4">
                    <?php echo Form::label($action->name, $action->name, array('class' => 'left')); ?>
                </div>
                <div class="span-2">
                    <?php echo Form::checkbox('element[' . $i . ']', $action->id, in_array($action->id, $a) ? TRUE : FALSE, array('id' => 'element_' . $x . '_' . $y . '_' . $z, 'class' => 'left', 'level' => '3')); ?>
                </div>
                <?php echo Form::hidden('cont_' . $x . '_' . $y . '_' . $z, '', array('id' => 'cont_' . $x . '_' . $y . '_' . $z)); ?>
                <?php $i++;
            }
            ?>
        <?php
        }
    }
    ?>
</div>
<?php if (!$profile->id) { ?>
    <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
        <?php echo Form::hidden('id', "$profile->id", array('id' => 'id')) ?>
        <?php echo Form::button("save", "Guardar", array('id' => 'save')); ?>
    </div>
<?php } else { ?>
    <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
        <?php echo Form::hidden('id', "$profile->id", array('id' => 'id')) ?>
        <?php echo Form::button("save", "Actualizar", array('id' => 'save')); ?>
    </div>
<?php } ?>






<?php echo Form::close(); ?>

