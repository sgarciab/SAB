<?php defined('SYSPATH') or die('No direct script access.');
/**
 * File: login.php
 * Author: Santiago García
 * Creation Date: 13/07/2014
 * Last Modified: 
 * Modified By: 
 */
?>
<?php echo HTML::style('media/css/login.css'); ?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<?php echo Form::open(null, array('class' => 'prepend-7 span-10 last', 'id' => 'login_form')); ?>
<div class="span-3  line">
	<?php echo Form::label("username", "Usuario :", array("class" => "span-3")); ?>
</div>
<div class="span-5 last line">
	<?php echo Form::input("username", null, array("id" => "username", "class" => "span-6")); ?>
</div>
<div class="span-3  line">
    <?php echo Form::label("password", "Contrase&ntilde;a :", array("class" => "span-3")); ?>
</div>
<div class="span-5 last line">
    <?php echo Form::password("password", null, array("id" => "password", "class" => "span-6")); ?>
</div>

<div class=" prepend-4 span-3 center last line">
	<?php echo Form::submit("submit", "Ingresar", array("class" => "span-3", 'id'=>'btn')); ?>
</div>
<?php echo Form::close(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').button();
		/*VALIDATION SECTION*/
		$("#login_form").validate({
			wrapper: "span",
			onkeyup: false,
			rules: {
				username: {
					required: true
				},
				password: {
					required: true
				}
			},
                        messages:{
                            username: {
					required: 'Este campo es obligatorio.'
				},
				password: {
					required: 'Este campo es obligatorio.'
				}
                        }
		});
	});
</script>
