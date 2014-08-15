<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ola extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('ola/index');
	}
        
        public function action_create()
	{
	$this->view = View::factory('ola/create');

        $ola = ORM::factory('Ola', $this->params[0]);
       
        if (!empty($_POST)) {
            
            $db = Database::instance();
            $db ->begin();
            
            try {
                if ($ola->id) {
                    $success_message = Kohana::message('sab', 'ola:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'ola:create:success');
                }                               
                             
                $ola->criticidad = arr::get($this->request->post(), 'criticidad');
                $ola->tiempoRespuesta = arr::get($this->request->post(), 'tiempoRespuesta');
                $ola->descripcion = arr::get($this->request->post(), 'descripcion');
              
                $ola->save();                             
                
                $db->commit();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('ola/index');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                $db->rollback();
            }
        }

       
        $this->view->set("ola", $ola);
        $this->view->set("opCriticidad", $ola);
	}
        
        public function action_loadola() {
        if ($this->request->is_ajax()) {
            
            $id = arr::get($this->request->post(), 'id');
            $criticidad = arr::get($this->request->post(), 'criticidad');
            $tiempoRespuesta = arr::get($this->request->post(), 'tiempoRespuesta');
            $descripcion = arr::get($this->request->post(), 'descripcion');
            
            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $nombre = str_replace($convert_from, $convert_to, $nombre);

         
            $ola = ORM::factory('Ola')                    
                    ->where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))                    
                    ->find_all();

            $this->view = View::factory('ola/loads/loadola');
            $this->view->set('ola', $ola);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }

} 
