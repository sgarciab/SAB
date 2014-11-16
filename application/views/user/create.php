<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2><?php echo ($user->id ? "Actualizar" : "Nuevo"); ?> Usuario</h2>
    <div class="required-fields">* Campos obligatorios</div>
</div>

<?php echo Form::open(NULL, array('id' => 'frmCreateUser')); ?>


<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("cedula", "* Identificaci&oacute;n:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("cedula", $user->cedula, array('id' => 'cedula', 'class' => 'span-5', 'maxlength' => '20')); ?>
        </div>        
    </div>
    <?php if ($user->id): ?>
        <div class="prepend-1 span-4">
            <?php echo Form::label("status", "* Estado:", array('class' => 'left')); ?>
        </div>	
        <div class="span-5 last">
            <?php echo Form::select("status", $status_values, $user->status, array('id' => 'status', 'class' => 'span-5')); ?>
        </div>
    <?php endif ?>
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nombre", "* Nombres:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("nombre", $user->nombre, array('id' => 'nombre', 'class' => 'span-5')); ?>
        </div>        
    </div>	
    <div class="prepend-1 span-4">
        <?php echo Form::label("apellido", "* Apellidos:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("apellido", $user->apellido, array('id' => 'apellido', 'class' => 'span-5')); ?>
    </div>	
</div>


<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("nickname", "* Nombre de Usuario:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("nickname", $user->nickname, array('id' => 'nickname', 'class' => 'span-5')); ?>
        </div>        
    </div>	
    <div class="prepend-1 span-4">
        <?php echo Form::label("profile", "* Perfil:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::select("profile_id", $profiles_array, $user->profile_id, array('id' => 'profile_id', 'class' => 'span-5')); ?>
    </div>	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("telefono", "Tel&eacute;fono:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::input("telefono", $user->telefono, array('id' => 'telefono', 'class' => 'span-5')); ?>
        </div>        
    </div>	
    <div class="prepend-1 span-4">
        <?php echo Form::label("fecNac", "Fecha Nacimiento:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("fecNac", $user->fechaNacimiento, array('id' => 'fecNac', 'class' => 'span-5')); ?>       
    </div>	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("password", "* Contrase&ntilde;a:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 last ">
            <?php echo Form::password("password", $user->id ? "_pass_flag_" : NULL, array('id' => 'password', 'autocomplete' => 'off', 'class' => 'span-5')); ?>
        </div>        
    </div>	
    <div class="prepend-1 span-4">
        <?php echo Form::label("confirmPassword", "* Confirmar Contrase&ntilde;a:", array('class' => 'left')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::password("confirmPassword", $user->id ? "_pass_flag_" : NULL, array('id' => 'confirmPassword', 'autocomplete' => 'off', 'class' => 'span-5')); ?>
    </div>	
</div>

<?php if (!$user->id) { ?>
    <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
        <?php echo Form::hidden('id', "$user->id", array('id' => 'id')) ?>
        <?php echo Form::button("save", "Guardar", array('id' => 'save')); ?>
    </div>
<?php } else { ?>
    <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
        <?php echo Form::hidden('id', "$user->id", array('id' => 'id')) ?>
        <?php echo Form::button("save", "Actualizar", array('id' => 'save')); ?>
    </div>
<?php } ?>



<?php echo Form::close(); ?>
</div>
</div>


