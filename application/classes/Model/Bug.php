<?php

/*
  File: action.php
  Author: Esteban Villacis
  Creation Date: *
 * Modified by :
 * Last Modification:
 */

class Model_Bug extends ORM {
    
    public $_table_name="bug";
    
    protected $_belongs_to = array('servicio' => array('model' => 'Servicio', 'foreign_key' => 'servicio_id'));
    
    protected $_has_many = array('buglogs' => array('model' => 'Buglogs', 'foreign_key' => 'bug_id'));

}

?>
