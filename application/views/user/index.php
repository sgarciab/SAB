<?php defined('SYSPATH') or die('No direct script access.');?>
<?php echo HTML::style('media/css/jquery-ui-1.10.3.custom.min.css'); ?>
<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Usuarios</h2>


    <div class="span-20 last line content_area">
      <div class="span-6 last line buttons_area">
                <a class="anchor_button" href="<?php echo Url::site('user/create/');?>">
                        Nuevo Usuario
                </a>
        </div>
        <?php if(count($users)>0): ?>
            <table id="table-users">
                <thead>
                    <tr>
						<th>Nombres y Apellidos</th>
						<th>Identificaci&oacute;n</th>
						<th>Usuario</th>
                                                <th>Email</th>
						<th>Perfil</th>
						<th>Estado</th>
						<th>Acciones</th>
                    </tr>
                </thead>
                <tbody>                    
                    <?php foreach ($users as $user): ?>
                    <tr>                       
                        <td><?php echo $user->nombre.' '.$user->apellido; ?></td>
                        <td><?php echo $user->cedula?></td>
                        <td id="nickname<?php echo $user->id; ?>"><?php echo $user->nickname; ?></td>
                        <td><?php echo $user->email?></td>
                        <td><?php echo $profiles_array[$user->profile_id]; ?></td>
                        <td class="span-2"><?php echo $status_values[$user->status]; ?></td>
                        <td class="span-2">
                            <?php if($user->nickname!='admin'){ ?>
                            <?php echo HTML::anchor("user/edit/" . $user->id, "Actualizar"); ?> 
							<?php if($current_user->id != $user->id): ?>
								|
							<?php $question_opt = $user->status=='ACTIVE'? "Desactivar" : "Activar"; ?>
							<?php echo HTML::anchor("#", $question_opt, array('id'=>'deactivate_'.$user->id, 'opt'=>$question_opt)); ?>							
							<?php endif; ?>
                            <?php }?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="prepend-5 span-10 append-5 line last center">
                <div class="span-10 line last notice">
                        <?php echo Kohana::message('admin', 'user:index:empty'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<div id="dialog_deactivate" display="none">
    <div><img src="<?php echo URL::site(); ?>media/images/off.png" width="110" height="110"><br/></div>
    <label>Desea </label> <label id="option_user"></label> <label>el usuario </label> <label id="user_namel"></label><label>?</label>
</div>
