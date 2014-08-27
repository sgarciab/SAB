<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicio extends Controller_Containers_Default {
    
    
    public function action_index()
	{
		$this->view = View::factory('servicio/index');
	}
        
        
        
    public function action_create()
	{
	$this->view = View::factory('servicio/create');

        $servicio = ORM::factory('Servicio', $this->params[0]);  
        
        
        if (!empty($_POST)) {
            
            try {
                if ($servicio->id) {
                    $success_message = Kohana::message('sab', 'servicio:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'servicio:create:success');
                }
                
                $servicio->Nombre = $this->request->post('nombre');
                $servicio->Cliente_idCliente = $this->request->post('empresah');
                
                $servicio->save();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('servicio/index');
                
            } catch (ORM_Validation_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
            }
        }

       
        $this->view->set("servicio", $servicio);
        
        
        }   
        
    public function action_loadservicios() {
        if ($this->request->is_ajax()) {
          
            $nombre = arr::get($this->request->post(), 'nombre');
          
             $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $nombre = str_replace($convert_from, $convert_to, $nombre);

         
            $servicios = ORM::factory('Servicio')                    
                    ->where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))                    
                    ->find_all();

            $this->view = View::factory('servicio/loads/loadservicios');
            $this->view->set("servicios", $servicios);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
}