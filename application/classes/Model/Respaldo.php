<?php

/*
  File: action.php
  Author: Esteban Villacis
  Creation Date: 14/07/2014
 * Modified by : 
 * Last Modification:
 */

class Model_Respaldo extends ORM {
    public $_table_name="respaldo";
    public $frecuencia = array('m'=>'Minutos', 'h'=>'Horas', 'd'=>'Dias');
    
    protected $_belongs_to = array('servicio' => array('model' => 'Servicio', 'foreign_key' => 'Servicio_idServicio'));
}

?>
