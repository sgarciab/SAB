<?php

defined('SYSPATH') or die('No direct script access.');
/*
  File: login.php
  Author: 
  Creation Date: 
 * Modified by :
 * Las Modification:
 */

class Controller_Login extends Controller_Containers_Login {

    /**
     * DEFAULT ACTION
     */
    
    public function action_index()
    {
        if($this->current_user)
            HTTP::redirect('/main/');
	
        Session::instance()->delete('current_user');
        $view = View::factory('/controller/login');
      
        if (!empty($_POST))
        {
            $user = Model_User::authenticate($_POST['username'], $_POST['password']);
            
            if ($user && $this->login($user->id)) 
            {
                HTTP::redirect('/main/');
            }
        }
             
        $this->template->content = $view;
    }
    
    public function action_logout()
    {
        $this->logout();
        HTTP::redirect('/login');
    }

}
