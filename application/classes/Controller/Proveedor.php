<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Proveedor extends Controller_Containers_Default {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
        
        public function action_create()
	{
	$this->view = View::factory('proveedor/create');

        $proveedor = ORM::factory('Proveedor');
       
        if (!empty($_POST)) {
            
            try {
                if ($proveedor->id) {
                    $success_message = Kohana::message('sab', 'proveedor:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'proveedor:create:success');
                }
                
                $proveedor->nombre = $_POST['nombre'];
                $proveedor->direccion = $_POST['direccion'];
                $proveedor->telefono1 = $_POST['telefono1'];
                $proveedor->telefono2 = $_POST['telefono2'];
                $proveedor->movil1 = $_POST['movil1'];
                $proveedor->movil2 = $_POST['movil2'];
              
                $proveedor->save();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('proveedor/index');
                
            } catch (ORM_Validation_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

       
        $this->view->set("proveedor", $proveedor);
	}

} 
