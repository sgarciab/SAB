<?php defined('SYSPATH') or die('No direct script access.');?>
<!---
/**
 * File: main.php
 * Author: Santiago García
 * Creation Date:  03-01-2015
 * Last Modified: 
 * Modified By: 
 */
-->
<div class="backButton" id="backButtonE"> </div>
<?php foreach ($bugs as $item): ?>
    <div id="<?= $item->id?>" class="bugsMenu" >
        <p><?= $item->nombre; ?></p>
        <p><?= $item->descripcion; ?> </p>
    </div>
<?php endforeach; ?>