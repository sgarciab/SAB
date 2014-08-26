<?php

/*
  File: Model_ServicioProveedor
  Author: Esteban Villacis
  Creation Date: 26/08/2014
 * Modified by :
 * Last Modification:
 */

class Model_ServicioProveedor extends ORM {
    public $_table_name="servicioproveedor";
    
    protected $_has_many = array('olas' => array('model' => 'Ola', 'foreign_key' => 'Cliente_idCliente'));
    protected $_belongs_to = array('proveedor' => array('model' => 'Proveedor', 'foreign_key' => 'Proveedor_idProveedor'));

}

?>
