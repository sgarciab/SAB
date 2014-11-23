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
    protected $_has_many = array('sla' => array('model' => 'Sla', 'foreign_key' => 'Servicio_idServicio'),
                                 'respaldo'=>array('model' => 'Respaldo', 'foreign_key' => 'Servicio_idServicio'),
                                 'responsabilidad'=>array('model' => 'Responsabilidad', 'foreign_key' => 'Servicio_idServicio'),
                                 'bug'=>array('model' => 'Bug', 'foreign_key' => 'servicio_id'));
    protected $_belongs_to = array('cliente' => array('model' => 'Cliente', 'foreign_key' => 'Cliente_idCliente'));

}

?>
