<?php
class Model_Profileaction extends ORM {

    public $_table_name="profile_action";

    protected $_belongs_to = array(
        'action' => array(),
        'profile' => array(),
    ); 
    }
    

?>