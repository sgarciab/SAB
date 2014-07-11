<?php
class Model_Allowedactions extends ORM {

    public $_table_name="allowed_actions";

    protected $_belongs_to = array(
        'action' => array()
    ); 
    }
    

?>