<?php

/*
  File: action.php
  Author: Santiago Garcia
  Creation Date: 20/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_Contacto extends ORM {
    public $_table_name="contacto";
    
    protected $_has_many = array('infocontactos' => array('model' => 'InformacionContacto', 'foreign_key' => 'Contacto_idContacto'));

}

?>
