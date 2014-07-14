<?php

/*
  File: login.php
  Author: Santiago Garcia
  Creation Date: 13/07/2014
 * Modified by :
 * Las Modification:
 */

class Model_User extends ORM {

    public $status_values = array('ACTIVE' => 'Activo', 'INACTIVE' => 'Inactivo');
    public $_table_name='usuario';


    //..RELATIONSHIP WITH OTHER TABLES
    protected $_belongs_to = array(
        'profile' => array(
            'model' => 'Profile'
        )
    );
	
    private static $default_allowed_actions = array(
            'admin/user/acount',

    );
	
	public function __set($key, $val) {
		switch ($key) {
			case 'password':
				parent::__set('password', md5($val));
				break;

			default:
				parent::__set($key, $val);
		}
	}

    public static function authenticate($username, $password)
    {
        $user = ORM::factory('User')->where('nickname', '=', $username)->find();

        if ($user == null)
        {
            FlashMessenger::factory()->set_message('error', 'Usuario ingresado no existe en el sistema.');
            return false;
        }

        if ($user->status != 'ACTIVE')
        {
            FlashMessenger::factory()->set_message('error', 'Para usar el sistema, su cuenta debe estar activa.');
            return false;
        }

        if (md5($password) != $user->password)
        {
            FlashMessenger::factory()->set_message('error', 'Contrase&ntilde;a ingresada es incorrecta.');
            return false;
        }

        return $user;
    }
    
    /**
        * Verifies if a User has access permission to the requested url
        * @param (string) $path
        * @return (boolean)
        */
    public function has_access_permission($controller, $action)
    {
        //var_dump($this->profile->id);die();    
        if( in_array("{$controller}/{$action}", self::$default_allowed_actions ) )
                    return TRUE;

			$authorized = false;
			
			$allowed_actions = ORM::factory("Allowedactions")
					->with('action')
					->where("url", '=', "admin/{$controller}/{$action}")->find();
					
			if($allowed_actions->loaded()){
				$authorized  = true;
			}		
			
            $profile_action = ORM::factory("Profileaction")->
                            with("action")->
                            where("profile_id", "=", $this->profile->id)->
                            where("link", "=", "admin/{$controller}/{$action}")->find();
							
            if($profile_action->action->loaded()){
				$authorized  = true;
			}
			
			return $authorized;
	}
    /**
        * Verifies if a User has access permission to the requested url
        * @param (string) $path
        * @return (boolean)
        */
    public function has_access_permission_sales($controller, $action)
    {
        //var_dump($this->profile->id);die();    
        if( in_array( "sales/{$controller}/{$action}", self::$default_allowed_actions ) )
                    return TRUE;

			$authorized = false;
			
			$allowed_actions = ORM::factory("Allowedactions")
					->with('action')
					->where("url", '=', "sales/{$controller}/{$action}")->find();
					
			if($allowed_actions->loaded()){
				$authorized  = true;
			}		
			
            $profile_action = ORM::factory("Profileaction")->
                            with("action")->
                            where("profile_id", "=", $this->profile->id)->
                            where("link", "=", "sales/{$controller}/{$action}")->find();
							
            if($profile_action->action->loaded()){
				$authorized  = true;
			}
			
			return $authorized;
	}
}

?>
