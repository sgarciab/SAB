<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Rpc extends Controller{
    public $auto_render = false;
    public $params = array();
	
    public function before()
    {
        // Convert params into array
        $this->params = explode('/',$this->request->param('params'));
    }
}