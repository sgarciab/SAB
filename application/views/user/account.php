<?php defined('SYSPATH') or die('No direct script access.'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<div class="prepend-2 span-20 append-2 last">
	<h2>Mi cuenta</h2>
	<div class="required-fields">* Campos obligatorios</div>
</div>

<?php echo Form::open(NULL, array('id'=>'frmAccountUser')); ?>


<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("document", "* CI:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::input("document", $user->cedula, array('id'=>'document','class'=>'span-5')); ?>
		</div>        
    </div>
    <div class="prepend-1 span-4">
        <?php echo Form::label("username", "* Nickname:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::label("username", $user->nickname, array('id'=>'username','class'=>'span-5')); ?>
		</div>        
    </div>
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("firstname", "* Nombres:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::input("firstname", $user->nombre, array('id'=>'firstname','class'=>'span-5')); ?>
		</div>        
    </div>	
	<div class="prepend-1 span-4">
        <?php echo Form::label("lastname", "* Apellidos:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
        <?php echo Form::input("lastname", $user->apellido, array('id'=>'lastname','class'=>'span-5')); ?>
    </div>	
</div>


<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("password", "* Contrase&ntilde;a:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::password("password",$user->id? "_pass_flag_" : NULL,array('id'=>'password', 'autocomplete'=>'off','class'=>'span-5')); ?>
		</div>        
    </div>	
	<div class="prepend-1 span-4">
        <?php echo Form::label("confirmPassword", "* Confirmar Contrase&ntilde;a:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
         <?php echo Form::password("confirmPassword",$user->id? "_pass_flag_" : NULL, array('id'=>'confirmPassword', 'autocomplete'=>'off','class'=>'span-5')); ?>
    </div>	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("cedula", "Cédula:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::input("cedula", $user->cedula, array('id'=>'cedula','class'=>'span-5')); ?>
		</div>        
    </div>	
	<div class="prepend-1 span-4">
        <?php echo Form::label("telefono", "Teléfono:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
         <?php echo Form::input("telefono", $user->telefono, array('id'=>'telefono','class'=>'span-5')); ?>
    </div>	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("email", "Email:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
		<div class="span-5 last ">
			<?php echo Form::input("email", $user->email, array('id'=>'email','class'=>'span-5')); ?>
		</div>        
    </div>	
	<div class="prepend-1 span-4">
        <?php echo Form::label("fechaNac", "Fecha de Nacimiento:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
         <?php echo Form::input("fechaNac", $user->telefono, array('id'=>'fechaNac','class'=>'span-5')); ?>
    </div>	
</div>

<div class="prepend-2 span-20 append-2 line last">
    <div class="span-4">
        <?php echo Form::label("status", "Estatus:", array('class'=>'right')); ?>
    </div>	
    <div class="span-5 last">
        <div class="span-5 prepend-3 last <?php echo $user->status ?>">
                <?php echo Form::label("status", $user->status, array('id'=>'status','class'=>'span-5')); ?>
        </div> 
    </div>	      
</div>

<div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
		<?php echo Form::hidden('id', "$user->id", array('id'=>'id')) ?>
	<?php echo Form::button("save", "Guardar", array('id' => 'save')); ?>
		<?php //echo Form::submit("save", "Guardar"); ?>
</div>
        <?php echo Form::close(); ?>
    </div>
</div>


