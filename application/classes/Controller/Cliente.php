<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cliente extends Controller_Containers_Default {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
        
        public function action_create()
	{
	$this->view = View::factory('cliente/create');

        $cliente = ORM::factory('Cliente');
       
        if (!empty($_POST)) {
            
            try {
                if ($cliente->id) {
                    $success_message = Kohana::message('sab', 'cliente:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'cliente:create:success');
                }
                
                $cliente->nombre = $_POST['nombre'];
                $cliente->nombreComercial = $_POST['nombreComercial'];
                $cliente->RUC = $_POST['RUC'];
                $cliente->direccion = $_POST['direccion'];
              
                $cliente->save();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('cliente/index');
                
            } catch (ORM_Validation_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

       
        $this->view->set("cliente", $cliente);
	}

} 
