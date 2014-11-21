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