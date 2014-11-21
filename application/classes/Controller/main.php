<?php defined('SYSPATH') or die('No direct script access.');

/**
 * File: main.php
 * Author: Santiago García
 * Creation Date: 13/07/2014 
 * Last Modified: 
 * Modified By: 
 */
class Controller_Main extends Controller_Containers_Default {
    public function action_index()
    {

        $this->view = View::factory('/controller/main');

        $servicios = ORM::factory('Servicio')->find_all();

        $this->view->set("servicios", $servicios);

    }
   
}

?>
