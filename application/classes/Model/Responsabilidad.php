<?php

/*
  File: InformacionContactoOla.php
  Author: Esteban Villacis
  Creation Date: *
 * Modified by :
 * Last Modification:
 */

class Model_Responsabilidad extends ORM {
    public $_table_name="responsable";
    protected $_belongs_to = array('servicio' => array('model' => 'Servicio', 'foreign_key' => 'Servicio_idServicio'));
    protected $_belongs_to = array('usuario' => array('model' => 'Usuario', 'foreign_key' => 'Usuario_idUsuario'));
    //RELATIONSHIP WITH OTHER TABLES
//    protected $_has_many = array(
//        'profile_action' => array(
//            'model' => 'Profile_action'
//        ),
//        'allowed_actions' => array(
//            'model' => 'Allowed_actions'
//        )		
//    );

}

?>
