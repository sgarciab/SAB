<?php

/*
  File: InformacionContacto.php
  Author: Esteban V.
  Creation Date: 06/08/2014
 * Modified by :
 * Last Modification: 06/08/2014
 */

class Model_InformacionProveedor extends ORM {
    public $_table_name="informacionproveedor";
    public $tipo_comunicacion=array('telefono'=>'Telefono','movil'=>'Movil','email'=>'Email','web'=>'Pagina Web');
    
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
