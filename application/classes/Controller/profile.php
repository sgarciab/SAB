<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * File: profile.php
 * Author: Santiago García
 * Creation Date: 27/09/2014 
 */
class Controller_Profile extends Controller_Containers_Default {

    public function action_index() 
    {
		 $profiles=ORM::factory('Profile')->find_all();
		
		$this->view = View::factory( 'profile/index' );
		$this->view->set('status_values', ORM::factory('Profile')->status_values);
		$this->view->set("profiles",$profiles);
    }

    public function action_create() 
    {
        $this->view = View::factory( 'profile/create' );

        $profile = ORM::factory('Profile', $this->params[0]);
        $a=array();$i=0;
        $grandpa= ORM::factory('Action')->where('parent_id','=',NULL)->find_all();
        $profile_action=ORM::factory('Profileaction')->where('profile_id','=',$profile->id)->find_all();
        foreach($profile_action as $p){
            $a[$i]=$p->action_id;    
            $i++;
        }
        
// die('es >'.$this->params[0].'<');
        if (!empty($_POST)) 
        {

            try 
            {

                //**************** MESSAGE DISCRIMINATION SECTION
                if ($profile->id) 
                {
                    $success_message = Kohana::message('sab', 'profile:update:success');
                } else 
                {
                    $success_message = Kohana::message('sab', 'profile:create:success');
                }

//
                if (!array_key_exists('status',$_POST))
                    $_POST['status'] = 'ACTIVE';

                if($_POST['id'])$profile->id = $_POST['id'];
                $profile->name=$_POST['name'];
                $profile->status=$_POST['status'];
                $profile->save();
                
                 if(array_key_exists('element',$_POST)){
                        //die(Debug::vars($_POST));
                        $query='delete from profile_action where profile_id="'.$_POST['id'].'"';
                        $query=DB::query(Database::DELETE,$query);
                        $query=$query->execute();
                        foreach($_POST['element'] as $element){
                            $profile_action = ORM::factory('Profileaction');
                            $profile_action->action_id=$element;
                            $profile_action->profile_id=$profile->id;
                            $profile_action->save();
                        }
                    }

                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('profile');
            } 
            catch (ORM_Validation_Exception $ex) 
            {
                foreach ($ex->errors('validation') as $error) 
                {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

        $this->view->set("a", $a);
        $this->view->set("profile", $profile);
        $this->view->set("grandpa", $grandpa);
        $this->view->set("profile_action", $profile_action);
        $this->view->set('status_values', ORM::factory('Profile')->status_values);

    }
    public function action_edit() 
    {
        $profile = ORM::factory('Profile', $this->params[0]);

        if ($profile->loaded()) 
        {
            HTTP::redirect('profile/create/' . $profile->id);
        }

        throw new Exception_ContentNotFound;
    }
    
    public function action_deactivate() 
    {
        if ($this->request->is_ajax()) 
        {
            $this->auto_render = FALSE;
            $id = arr::get($this->request->post(), 'id');
            $profile = ORM::factory('Profile', $id);

            if ($profile->loaded()) 
            {
                if ($profile->status == 'ACTIVE') 
                {
                    $profile->status = 'INACTIVE';
                    $message = Kohana::message('admin', 'profile:inactive:success');
                } else 
                {
                    $profile->status = 'ACTIVE';
                    $message = Kohana::message('admin', 'profile:active:success');
                }

                if ($profile->save()) 
                {
					$users = ORM::factory('User')->where('profile_id', '=', $profile->id)->find_all()->as_array('id','id');
					
					if(count($users)>0){
						if($profile->status == 'INACTIVE'){
							foreach($users as $key => $value){
								$user=  ORM::factory('User', $value);
								$user->status = 'INACTIVE';
								$user->save();
							}
						}
						else if($profile->status == 'ACTIVE')
						{

							foreach($users as $key => $value){
								$user=  ORM::factory('User', $value);
								$user->status = 'ACTIVE';
								$user->save();
							}
						}
					}
					
                    FlashMessenger::factory()->set_message('success', $message);
                } else 
                {
                    FlashMessenger::factory()->set_message('error', Kohana::message('admin', 'profile:deactive:error'));
                }
            }

            $array = array('saved' => (int) $profile->id);
            echo json_encode($array);
        }
    }
    
}
