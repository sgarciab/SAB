<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Rpc extends Controller{
    public $auto_render = false;
    public $params = array();
	
    public function before()
    {
        // Convert params into array
        $this->params = explode('/',$this->request->param('params'));
    }
    
    
      public function action_check_profilename() {
        if ($this->request->is_ajax()) {
            $id = $this->request->post('id');
            $name = utf8_decode($this->request->post('name'));
            $name = trim($name);

            $profiles = ORM::factory('Profile')
                    ->where(DB::expr("LOWER(name)"), 'LIKE', DB::expr("LOWER('" . $name . "')"));

            if ($id) {
                $profiles->and_where('id', '!=', $id);
            }

            if ($profiles->count_all() > 0) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }
    
    public function action_check_username() {
        $this->auto_render = FALSE;
        if ($this->request->is_ajax()) {
            $id = $this->request->post('id');
            $name = $this->request->post('nickname');
            $name = trim($name);

            $users = ORM::factory('User')
                    ->where(DB::expr("LOWER(nickname)"), 'LIKE', DB::expr("LOWER('" . $name . "')"));

            if ($id) {
                $users->and_where('id', '!=', $id);
            }

            if ($users->count_all() > 0) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

    public function action_check_useridentification() {
        if ($this->request->is_ajax()) {
            $id = $this->request->post('id');
            $name = utf8_decode($this->request->post('cedula'));
            $name = trim($name);

            $users = ORM::factory('User')
                    ->where(DB::expr("cedula"), '=', $name);

            if ($id) {
                $users->and_where('id', '!=', $id);
            }

            if ($users->count_all() > 0) {
                echo json_encode(false);
            } else {
                echo json_encode(true);
            }
        }
    }

}