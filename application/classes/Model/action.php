<?php

/*
  File: action.php
  Author: David Nicolalde
  Creation Date: 03/10/2012
 * Modified by :
 * Las Modification:
 */

class Model_Action extends ORM {
    public $_table_name="action";
    
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
