<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * File: user.php
 * Author: Santiago García
 * Creation Date: 27/09/2014 
 * Last Modified:
 * Modified By: 
 */
class Controller_User extends Controller_Containers_Default {

    public function action_index() 
    {
		 $users = ORM::factory('User')->find_all();
		 $profiles=ORM::factory('Profile')->find_all();

        if ($this->current_user->id != 1) 
        {
            //SUPER-ADMIN HAS ID 1
            $users = ORM::factory('User')->find_all();
        }
        
	          
		$profiles_array=array(); 
		if(count($profiles)>0){
			
			foreach ($profiles as $key => $value) {
				$profiles_array[$value->id]=$value->name;
			}
		}
		
		$this->view = View::factory( 'user/index' );
		$this->view->set("current_user", $this->current_user);
		$this->view->set("users", $users);
		$this->view->set('status_values', ORM::factory('User')->status_values);
		$this->view->set("profiles_array",$profiles_array);
    }

    public function action_create() 
    {
        $this->view = View::factory( 'user/create' );

        $user = ORM::factory('User', $this->params[0]);
        $current_user = Session::instance()->get('current_user', false);
		$profiles=ORM::factory('Profile')->where('status', '=', 'ACTIVE')->find_all();
		
		$profiles_array=array();
		if(count($profiles)>0){
			foreach ($profiles as $key => $value) {
				$profiles_array[$value->id]=$value->name;
			}
		}

        if (!empty($_POST)) 
        {
            try 
            {
                //**************** MESSAGE DISCRIMINATION SECTION
                if ($user->id) 
                {
                    $success_message = Kohana::message('admin', 'user:update:success');
                } else 
                {
                    $success_message = Kohana::message('admin', 'user:create:success');
                }
				
				
                //**************** CHANGE/CREATE PASSWORD SECTION
                if ($_POST['password'] == '_pass_flag_') 
                {
                    unset($_POST['password']);
                }             
                
                $user->nickname = arr::get($this->request->post(), 'nickname');
                $user->nombre = arr::get($this->request->post(), 'nombre');
                $user->apellido = arr::get($this->request->post(), 'apellido');
                $user->cedula = arr::get($this->request->post(), 'cedula');
                $user->telefono = arr::get($this->request->post(), 'telefono');
                $user->email = arr::get($this->request->post(), 'email');
                $user->fechaNacimiento = arr::get($this->request->post(), 'fecNac');
                $user->profile_id = arr::get($this->request->post(), 'profile_id');
                $user->password = arr::get($this->request->post(), 'password');
                $user->save();

                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('user/index');
            } 
            catch (ORM_Validation_Exception $ex) 
            {
                foreach ($ex->errors('validation') as $error) 
                {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

        $this->view->set("current_user", $this->current_user);
        $this->view->set('status_values', ORM::factory('User')->status_values);
        $this->view->set("user", $user);
		$this->view->set("profiles_array",$profiles_array);
    }

    public function action_edit() 
    {
        $user = ORM::factory('User', $this->params[0]);

        if ($user->loaded()) 
        {
            HTTP::redirect('user/create/' . $user->id);
        }

        throw new Exception_ContentNotFound;
    }

    public function action_deactivate() 
    {
        if ($this->request->is_ajax()) 
        {
            $this->auto_render = FALSE;
            $id = arr::get($this->request->post(), 'id');
            $user = ORM::factory('User', $id);

            if ($user->loaded()) 
            {
                if ($user->status == 'ACTIVE') 
                {
                    $user->status = 'INACTIVE';
                    $message = Kohana::message('admin', 'user:inactive:success');
                } else 
                {
                    $user->status = 'ACTIVE';
                    $message = Kohana::message('admin', 'user:active:success');
                }

                if ($user->save()) 
                {
                    FlashMessenger::factory()->set_message('success', $message);
                } else 
                {
                    FlashMessenger::factory()->set_message('error', Kohana::message('admin', 'user:deactive:error'));
                }
            }

            $array = array('saved' => (int) $user->id);
            echo json_encode($array);
        }
    }
    
	public function action_account() 
    {
		$this->view = View::factory( 'user/account' );

        $user = ORM::factory('User', $this->current_user->id);

        if (!empty($_POST)) 
        {
            try 
            {
                //**************** MESSAGE DISCRIMINATION SECTION
                if ($user->id) 
                {
                    $success_message = Kohana::message('admin', 'user:acount:success');
                } else 
                {
                    $success_message = Kohana::message('admin', 'user:acount:success');
                }
				
				
                //**************** CHANGE/CREATE PASSWORD SECTION
                if ($_POST['password'] == '_pass_flag_') 
                {
                    unset($_POST['password']);
                }

                $user->values($_POST);
                $user->save();

                FlashMessenger::factory()->set_message('success', $success_message);
                $this->request->redirect('/main');
            } 
            catch (ORM_Validation_Exception $ex) 
            {
                foreach ($ex->errors('validation') as $error) 
                {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

        $this->view->set("current_user", $this->current_user);
        $this->view->set('status_values',ORM::factory('User')->status_values);
        $this->view->set("user", $user);
    }
	
	
}
