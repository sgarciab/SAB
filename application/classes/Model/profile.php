<?php

/*
  File: login.php
  Author: Santiago Garcia
  Creation Date: 13/07/2014
 * Modified by :
 * Las Modification:
 */

class Model_Profile extends ORM {

    public $status_values = array('ACTIVE' => 'Activo', 'INACTIVE' => 'Inactivo');
    public $_table_name="profile";

    public function get_profile_action($parent_id,$profile_id)
    {
            $sql= "SELECT  *
                    FROM profile_action pa
                    JOIN action a ON a.id = pa.action_id
                    WHERE profile_id = :profile_id";         
            if($parent_id)
               $sql.=  " AND a.parent_id = :parent_id ORDER BY a.weight ASC";
            elseif($parent_id===NULL)
               $sql.=  " AND a.parent_id IS NULL ORDER BY a.weight ASC";
            
            $query = DB::query(Database::SELECT, $sql);
           
            $query->param(":profile_id", $profile_id);
            $query->param(":parent_id", $parent_id);
			
            $result = $query->execute()->as_array();
            if ($result)
            {
               return $result;
            }
            else
            {
               return false;
            }	
        }      
}

?>
