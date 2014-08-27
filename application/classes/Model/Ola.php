<?php

/*
  File: action.php
  Author: Esteban Villacis
  Creation Date: 14/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_Ola extends ORM {
    public $_table_name="ola";
    public $opCriticidad = array('bajo'=>'Bajo', 'medio'=>'Medio', 'alto'=>'Alto', 'ninguna'=>'Ninguna');
    public $medida = array('m'=>'Minutos', 'h'=>'Horas', 'd'=>'Dias');
    
    protected $_belongs_to = array('servicioproveedor' => array('model' => 'ServicioProveedor', 'foreign_key' => 'ServicioProveedor_idServicioProveedor'));
}

?>
