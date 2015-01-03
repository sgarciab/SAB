<?php

/*
  File: action.php
  Author: Esteban Villacis
  Creation Date: *
 * Modified by :
 * Last Modification:
 */

class Model_Buglogs extends ORM {
    
    public $_table_name="bug_logs";
    
    protected $_belongs_to = array('bug' => array('model' => 'Bug', 'foreign_key' => 'bug_id'));

    public $statusOptions=array('opened'=>'Abierto','reopened'=>'Reabierto','fixed'=>'Arreglado','closed'=>'Cerrado',);






}

?>
