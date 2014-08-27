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
                             
                //$servicio->id = arr::get($this->request->post(), 'id');
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

       
        $this->view->set("servicio", $servicio);        
	}
        
        public function action_edit()
	{
	$this->view = View::factory('servicioproveedor/edit');
       
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
         
            $servicios = ORM::factory('ServicioProveedor')                    
                    ->where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))                   
                    ->find_all();

            $this->view = View::factory('servicioproveedor/loads/loadservicios');
            $this->view->set('servicios', $servicios);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
    
    public function action_autocompleterservicio() {
        if ($this->request->is_ajax()) {
            $data = arr::get($this->request->query(), 'q');

            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $data = str_replace($convert_from, $convert_to, $data);


            $proveedores = ORM::factory('Proveedor')
                    ->where(DB::expr("LOWER(id)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))                    
                    ->or_where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(identificacion)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->find_all();

            if ($proveedores->count()) {
                foreach ($proveedores as $proveedor) {
                    echo $proveedor->id . '|' . $proveedor->nombre . '|' . $proveedor->identificacion . "\n";
                }
            } else {
                echo '0' . "\n";
            }
            $this->auto_render = FALSE;
        }
             
    }

} 
