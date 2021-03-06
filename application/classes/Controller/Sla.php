<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Sla extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('sla/index');
	}
        
        public function action_create()
	{
	$this->view = View::factory('sla/create');

        $sla = ORM::factory('Sla', $this->params[0]);
       
        if (!empty($_POST)) {
            
            $db = Database::instance();
            $db ->begin();
            
            try {
                if ($sla->id) {
                    $success_message = Kohana::message('sab', 'sla:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'sla:create:success');
                }                               
                             
                $sla->criticidad = arr::get($this->request->post(), 'criticidad');
                $sla->responsable = arr::get($this->request->post(), 'responsable');
                $sla->tiempoRespuesta = arr::get($this->request->post(), 'tiempoRespuesta');
                $sla->medTiempo = arr::get($this->request->post(), 'medTiempo');
                $sla->descripcion = arr::get($this->request->post(), 'descripcion');
                $sla->disponibilidad = floatval(arr::get($this->request->post(), 'disponibilidad'));
                $sla->Servicio_idServicio = arr::get($this->request->post(), 'servicioh');
              
                $sla->save();                             
                
                $db->commit();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('sla/index');
                
            } catch (ORM_Validation_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                $db->rollback();
            }
        }

       
        $this->view->set("sla", $sla);
        $this->view->set("opCriticidad", $sla);
    }
    
    
    public function action_loadsla() {
        if ($this->request->is_ajax()) {
            
            $id = arr::get($this->request->post(), 'id');
            $criticidad = arr::get($this->request->post(), 'criticidad');
            $tiempoRespuesta = arr::get($this->request->post(), 'tiempoRespuesta');
            $medTiempo = arr::get($this->request->post(), 'medTiempo');
            $descripcion = arr::get($this->request->post(), 'descripcion');
            
            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $criticidad = str_replace($convert_from, $convert_to, $criticidad);
            $tiempoRespuesta = str_replace($convert_from, $convert_to, $tiempoRespuesta);

         
            $sla = ORM::factory('Sla')                    
                    ->where(DB::expr("LOWER(criticidad)"), 'LIKE', DB::expr("_utf8 '%" . $criticidad . "%' collate utf8_bin"))
                    ->and_where(DB::expr("LOWER(tiempoRespuesta)"), 'LIKE', DB::expr("_utf8 '%" . $tiempoRespuesta . "%' collate utf8_bin"))
                    ->and_where(DB::expr("LOWER(medTiempo)"), 'LIKE', DB::expr("_utf8 '%" . $medTiempo . "%' collate utf8_bin"))
                    ->find_all();

            $this->view = View::factory('sla/loads/loadsla');
            $this->view->set('sla', $sla);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
    
    
    public function action_edit()
    {
    $this->view = View::factory('sla/edit');

    $sla = ORM::factory('Sla', $this->params[0]);


    if (!empty($_POST)) {

        $db = Database::instance();
        $db ->begin();
        try {
            if ($sla->id) {
                $success_message = Kohana::message('sab', 'sla:update:success');
            } else {
                $success_message = Kohana::message('sab', 'sla:create:success');
            }

            $sla->criticidad = arr::get($this->request->post(), 'criticidad');
            $sla->responsable = arr::get($this->request->post(), 'responsable');
            $sla->tiempoRespuesta = arr::get($this->request->post(), 'tiempoRespuesta');
            $sla->medTiempo = arr::get($this->request->post(), 'medTiempo');
            $sla->descripcion = arr::get($this->request->post(), 'descripcion');
            $sla->disponibilidad = floatval(arr::get($this->request->post(), 'disponibilidad'));
            $sla->Servicio_idServicio = arr::get($this->request->post(), 'servicioh');

            $sla->save();                

            $db->commit();                

            FlashMessenger::factory()->set_message('success', $success_message);
            HTTP::redirect('sla/index');

        } catch (Database_Exception $ex) {
            foreach ($ex->errors('validation') as $error) {
                FlashMessenger::factory()->set_message('error', $error);
            }
             $db->rollback();
        }
    }

    $this->view->set('sla', $sla);
    $this->view->set("opCriticidad", $sla); 

    }
    

} 
