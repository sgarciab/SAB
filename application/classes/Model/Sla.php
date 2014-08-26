<?php

/*
  File: action.php
  Author: Santiago García
  Creation Date: 26/08/2014
 * Modified by :
 * Last Modification:
 */

class Model_Sla extends ORM {
    public $_table_name="sla";
    protected $_has_many = array('infoproveedores' => array('model' => 'InformacionProveedor', 'foreign_key' => 'proveedor_id'));

}

?>
