<?php

/*
  File: InformacionContactoOla.php
  Author: Esteban Villacis
  Creation Date: *
 * Modified by :
 * Last Modification:
 */

class Model_InformacionContactoOla extends ORM {
    public $_table_name="informacioncontactoola";
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
