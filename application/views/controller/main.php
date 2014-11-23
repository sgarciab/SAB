<?php defined('SYSPATH') or die('No direct script access.');?>
<!---
/**
 * File: main.php
 * Author: Santiago García
 * Creation Date:  20-11-2014
 * Last Modified: 
 * Modified By: 
 */
-->


<h2>Proyectos</h2>
<div class="menuBugs" >

    <?php foreach ($servicios as $item): ?>
        <div id="<?= $item->id?>" class="proyectoMenu" >
            <?= $item->Nombre; ?>
        </div>
    <?php endforeach; ?>
       
</div>

<div class="formBugs" >
    
    <div class="prepend-2 span-20 append-2 line last">
    
    
        <div class="span-4">
            <?php echo Form::label("nombre", "Nombre:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("nombre", $bug->nombre,  array('id' => 'nombre', 'class' => 'span-5')); ?>
        </div>

        <div class=" prepend-1 span-4">
            <?php echo Form::label("descripcion", "Descripci&oacute;n:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("descripcion", $bug->descripcion, null, array('id' => 'descripcion', 'class' => 'span-5')); ?>
        </div>
    
    </div>
    
    <div class="prepend-2 span-20 append-2 line last">
    
    
        <div class="span-4">
            <?php echo Form::label("fechaAparicion", "Fecha de Aparici&oacute;n:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("fechaAparicion", $bug->fechaAparicion,  array('id' => 'fechaAparicion', 'class' => 'span-5')); ?>
        </div>

        <div class=" prepend-1 span-4">
            <?php echo Form::label("fechaReporte", "Fecha de Reporte:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("fechaReporte", $bug->fechaReporte, null, array('id' => 'fechaReporte', 'class' => 'span-5')); ?>
        </div>
    
    </div>
    
    <div class="prepend-2 span-20 append-2 line last">
    
    
        <div class="span-4">
            <?php echo Form::label("imagen", "Imagen:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("imagen", $bug->imagen, array('id' => 'imagen', 'class' => 'span-5')); ?>
        </div>
    
    </div>
    
</div>