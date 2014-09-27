<?php

/*
  File: action.php
  Author: Santiago García
  Creation Date: 26/09/2014
 * Modified by : 
 * Last Modification:
 */

class Model_ArchivoRespaldo extends ORM {
    public $_table_name="archivorespaldo";
  
    protected $_belongs_to = array('servicio' => array('model' => 'Servicio', 'foreign_key' => 'Servicio_idServicio'));
}

?>
