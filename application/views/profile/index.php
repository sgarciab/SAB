<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="prepend-2 span-20 append-2 last">
    <h2 class="center">Administraci&oacute;n de Perfiles</h2>


    <div class="span-20 last line content_area">
      <div class="span-6 last line buttons_area">
                <a class="anchor_button" href="<?php echo Url::site('profile/create/');?>">
                        Nuevo Perfil
                </a>
        </div>
        <?php if(count($profiles)>0): ?>
            <table id="table-profiles">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($profiles as $profile): ?>
                    <tr>
                        <td><?php echo $profile->name; ?></td>
                        <td class="span-2"><?php echo $status_values[$profile->status]; ?></td>
                        
                        <td class="span-2">
                            <?php if($profile->id != '1'){?>
                                <?php echo HTML::anchor("profile/edit/" . $profile->id, "Actualizar"); ?> 
                                <?php if(/*$current_user->id != $user->id*/true): ?>
                                        |
                                <?php $question_opt = $profile->status=='ACTIVE'? "Desactivar" : "Activar"; ?>
                                <?php echo HTML::anchor("#", $question_opt, array('id'=>'deactivate_'.$profile->id, 'opt'=>$question_opt)); ?>							
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
                        <?php echo Kohana::message('admin', 'profile:index:empty'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

