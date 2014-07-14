<?php

/*
  File: action.php
  Author: Santiago Garcia
  Creation Date: 13/07/2014
 * Modified by :
 * Last Modification:
 */

class Model_Cliente extends ORM {
    public $_table_name="cliente";
    
        //RELATIONSHIP WITH OTHER TABLES
    protected $_has_many = array(
        'profile_action' => array(
            'model' => 'Profile_action'
        ),
        'allowed_actions' => array(
            'model' => 'Allowed_actions'
        )		
    );

}

?>
