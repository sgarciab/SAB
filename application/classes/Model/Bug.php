<?php

/*
  File: action.php
  Author: Santiago Garcia
  Creation Date: 13/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_Cliente extends ORM {
    public $_table_name="cliente";
    
        protected $_has_many = array('contactos' => array('model' => 'Contacto', 'foreign_key' => 'Cliente_idCliente'));


}

?>
