<?php

/*
  File: InformacionContacto.php
  Author: Santiago Garcia
  Creation Date: 31/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_InformacionContacto extends ORM {
    public $_table_name="informacioncontacto";
    public $_tipo=array('telefono'=>'Telefono','movil'=>'Movil','email'=>'Email','web'=>'Pagina Web');
    
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
