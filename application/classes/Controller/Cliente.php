<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cliente extends Controller_Containers_Default {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
        
        public function action_hola()
	{
		$this->response->body('Hola 3!');
	}

} 
