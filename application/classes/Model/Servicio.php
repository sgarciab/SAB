<?php

/*
  File: action.php
  Author: Santiago García
  Creation Date: 26/08/2014
 * Modified by :
 * Last Modification:
 */

class Model_Servicio extends ORM {
    public $_table_name="servicio";
    protected $_has_many = array('sla' => array('model' => 'Sla', 'foreign_key' => 'Servicio_idServicio'));

}

?>
