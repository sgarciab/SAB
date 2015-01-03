<?php defined('SYSPATH') or die('No direct script access.');?>
<!---
/**
 * File: main.php
 * Author: Santiago García, Esteban Villacis
 * Creation Date:  20-11-2014
 * Last Modified: 
 * Modified By: 
 */
-->

<?php echo Form::open(NULL, array('id' => 'formBugs','enctype' => 'multipart/form-data')); ?>
<h2>Proyectos</h2> 
<div id="menuAction">
    <input type="radio" value="create" id="crear" name="action" checked="checked"><label >Crear</label>
    <input type="radio" value="edit" id="editar" name="action" ><label >Editar</label>
</div>
<div class="menuBugs" >

    <?php foreach ($servicios as $item): ?>
        <div id="<?= $item->id?>" class="proyectoMenu" >
            <?= $item->Nombre; ?>
        </div>
    <?php endforeach; ?>
       
</div>


<div class="divformBugs" >
    <div id="backButton"> </div>
    
    
    <div class="prepend-2 span-20 append-2 line last">
    
      <?php echo Form::hidden("proyectoid", null,  array('id' => 'proyectoid')); ?>
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
            <?php echo Form::input("descripcion", $bug->descripcion, array('id' => 'descripcion', 'class' => 'span-5')); ?>
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
            <?php echo Form::label("fechaRep", "Fecha de Reporte:", array('class' => 'left')); ?>
        </div>
        <div class="span-5 last">
            <?php echo Form::input("fechaRep", $bug->fechaReporte,  array('id' => 'fechaRep', 'class' => 'span-5')); ?>
        </div>
    
    </div>
    
    
    <div class="prepend-2 span-20 append-2 line last">
    
    
        <div class="span-4">
            <?php echo Form::label("imagen", "Imagen:", array('class' => 'left')); ?>
        </div>
        
        <div class="span-5 last">
            <?php echo Form::file("imagen", array('id' => 'imagen','class'=>'cancel')); ?>
        </div>
    
    </div>
    
    <?php if (!$bug->id) { ?>
        <div class="prepend-2 span-20 append-2 line last center" style="margin-top:30px">
           <?php echo Form::button("save", "Guardar", array('id' => 'save','class'=>'custom-button')); ?>
        </div>
    <?php } else { ?>
        <div class="span-20 append-2 line last center" style="margin-top:30px">
             <?php echo Form::button("save", "Actualizar", array('id' => 'save','class'=>'custom-button ')); ?>
        </div>
    <?php } ?>
    

</div>

<div id="chooseBug" class="chooseBug" hidden="hidden" >

    

</div>

    <?php echo Form::close(); ?>