<?php

/*
  File: action.php
  Author: Santiago García
  Creation Date: 26/08/2014
 * Modified by : Santiago García
 * Last Modification: 30/08/2014
 */

class Model_Sla extends ORM {
    public $_table_name="sla";
    protected $_belongs_to = array('servicio' => array('model' => 'Servicio', 'foreign_key' => 'Servicio_idServicio'));

    public $opCriticidad = array('bajo'=>'Bajo', 'medio'=>'Medio', 'alto'=>'Alto', 'ninguna'=>'Ninguna');
    public $medida = array('m'=>'Minutos', 'h'=>'Horas', 'd'=>'Dias');
    
}

?>
