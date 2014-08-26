<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ServicioProveedor extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('servicioproveedor/index');
	}
        
        public function action_create()
	{
	$this->view = View::factory('servicioproveedor/create');

        $servicio = ORM::factory('ServicioProveedor', $this->params[0]);
       
        if (!empty($_POST)) {
            
            $db = Database::instance();
            $db ->begin();
            
            try {
                if ($servicio->id) {
                    $success_message = Kohana::message('sab', 'servicioproveedor:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'servicioproveedor:create:success');
                }                               
                             
                $servicio->nombre = arr::get($this->request->post(), 'nombre');
                $servicio->descripcion = arr::get($this->request->post(), 'descripcion');
                $servicio->Proveedor_idProveedor = arr::get($this->request->post(), 'proveedorh');
              
                $servicio->save();                             
                
                $db->commit();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('servicioproveedor/index');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                $db->rollback();
            }
        }

       
        $this->view->set("servicioproveedor", $servicio);        
	}
        
        public function action_loadola() {
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

         
            $ola = ORM::factory('Ola')                    
                    ->where(DB::expr("LOWER(criticidad)"), 'LIKE', DB::expr("_utf8 '%" . $criticidad . "%' collate utf8_bin"))
                    ->and_where(DB::expr("LOWER(tiempoRespuesta)"), 'LIKE', DB::expr("_utf8 '%" . $tiempoRespuesta . "%' collate utf8_bin"))
                    ->and_where(DB::expr("LOWER(medTiempo)"), 'LIKE', DB::expr("_utf8 '%" . $medTiempo . "%' collate utf8_bin"))
                    ->find_all();

            $this->view = View::factory('ola/loads/loadola');
            $this->view->set('ola', $ola);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
    
    public function action_autocompleterproveedor() {
        if ($this->request->is_ajax()) {
            $data = arr::get($this->request->query(), 'q');

            //GET A LIST OF SUPPLIER TO LOAD THE AUTOCOMPLETER

            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $data = str_replace($convert_from, $convert_to, $data);


            $proveedores = ORM::factory('servicioproveedor')
                    ->where(DB::expr("LOWER(id)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))                    
                    ->or_where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(descripcion)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->find_all();

            if ($proveedores->count()) {
                foreach ($proveedores as $proveedor) {
                    echo $proveedor->id . '|' . $proveedor->nombre . '|' . $proveedor->descripcion . "\n";
                }
            } else {
                echo '0' . "\n";
            }
            $this->auto_render = FALSE;
        }
             
    }

} 
