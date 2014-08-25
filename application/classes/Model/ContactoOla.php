<?php

/*
  File: Model_ContactoOla.php
  Author: Esteban Villacis
  Creation Date: *
 * Modified by :
 * Last Modification:
 */

class Model_ContactoOla extends ORM {
    public $_table_name="contactoOla";
    
    protected $_has_many = array('infocontactosola' => array('model' => 'InformacionContactoOla', 'foreign_key' => 'ContactoOLA_idContactoOLA'));
    protected $_belongs_to = array('cliente' => array('model' => 'Cliente', 'foreign_key' => 'Cliente_idCliente'));   
}

?>
