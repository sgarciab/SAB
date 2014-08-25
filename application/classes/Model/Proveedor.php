<?php

/*
  File: action.php
  Author: Esteban Villacis
  Creation Date: 14/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_Proveedor extends ORM {
    public $_table_name="proveedor";
    protected $_has_many = array('infoproveedores' => array('model' => 'InformacionProveedor', 'foreign_key' => 'proveedor_id'));

}

?>
