<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Proveedor extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('proveedor/index');
	}
        
        public function action_create()
	{
	$this->view = View::factory('proveedor/create');

        $proveedor = ORM::factory('Proveedor', $this->params[0]);
       
        if (!empty($_POST)) {
            
            $db = Database::instance();
            $db ->begin();
            
            try {
                if ($proveedor->id) {
                    $success_message = Kohana::message('sab', 'proveedor:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'proveedor:create:success');
                }                               
                             
                $proveedor->nombre = arr::get($this->request->post(), 'nombre');
                $proveedor->identificacion = arr::get($this->request->post(), 'identificacion');
                $proveedor->direccion = arr::get($this->request->post(), 'direccion');
              
                $proveedor->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
                for($i=1; $i<=$numReg; $i++){
                    $infoProveedor = ORM::factory('InformacionProveedor');
                    
                    $infoProveedor->tipo = arr::get($this->request->post(), 'tipo_'.$i);
                    $infoProveedor->contenido = arr::get($this->request->post(), 'contenido_'.$i);
                    $infoProveedor->observacion = arr::get($this->request->post(), 'observacion_'.$i);
                    $infoProveedor->proveedor_id = $proveedor->id;
                    
                    if($infoProveedor->tipo != null || $infoProveedor->tipo != ''){
                        $infoProveedor->save();
                    }
                    
                    $infoProveedor = NULL;
                }
                
                $db->commit();
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('proveedor/index');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                $db->rollback();
            }
        }

       
        $this->view->set("proveedor", $proveedor);
	}
        
        public function action_edit()
	{
	$this->view = View::factory('proveedor/edit');

        $proveedor = ORM::factory('Proveedor', $this->params[0]);
        
       
        if (!empty($_POST)) {
                  
            $db = Database::instance();
            $db ->begin();
            try {
                if ($proveedor->id) {
                    $success_message = Kohana::message('sab', 'proveedor:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'proveedor:create:success');
                }
                
                $proveedor->nombre = $this->request->post('nombre');
                $proveedor->identificacion = $this->request->post('identificacion');
                $proveedor->direccion = $this->request->post('direccion');
             
                $proveedor->save();
                $temp=ORM::factory('InformacionProveedor')->where('proveedor_id', '=', $proveedor->id)->find_all();
                foreach ($temp as $item) {
                    $item->delete();
                }
                $numReg = arr::get($this->request->post(), 'cont');
                for($i=1; $i<=$numReg; $i++){
                    $infoProveedor = ORM::factory('InformacionProveedor');
                    $infoProveedor->tipo = $this->request->post('tipo_'.$i);
                    $infoProveedor->contenido = arr::get($this->request->post(), 'contenido_'.$i);
                    $infoProveedor->observacion = arr::get($this->request->post(), 'observacion_'.$i);
                    $infoProveedor->Contacto_idContacto = $contacto->id;
          
                    if($infoProveedor->tipo != null || $infoProveedor->tipo != ''){
                        $infoProveedor->save();
                    }
                    
                    $infoProveedor = NULL;
                }
                
                $db->commit();
                
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('proveedor/index');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                 $db->rollback();
            }
        }

       
        $this->view->set("proveedor", $proveedor);
        $tipo=ORM::factory("InformacionProveedor")->tipo_comunicacion;
        $this->view->set("_tipo",$tipo );
	}        
        
        public function action_loadproveedores() {
        if ($this->request->is_ajax()) {
            $identificacion = arr::get($this->request->post(), 'identificacion');
            $nombre = arr::get($this->request->post(), 'nombre');
            $telefono = arr::get($this->request->post(), 'telefono');


             $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $nombre = str_replace($convert_from, $convert_to, $nombre);

         
            $proveedor = ORM::factory('Proveedor')                    
                    ->where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))                    
                    ->find_all();

            $this->view = View::factory('proveedor/loads/loadproveedor');
            $this->view->set("proveedor", $proveedor);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
    
    public function action_loadinformacion() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('proveedor/loads/loadinformacion');
            $cont = arr::get($this->request->post(), 'cont');
            $tipo=ORM::factory('InformacionProveedor')->tipo_comunicacion;
            $this->view->set('tipo', $tipo);
            $this->view->set('cont', $cont);
            echo $this->view;
            $this->auto_render = FALSE;
        }
    }
    
    public function action_checkIdentificacion() {
        if ($this->request->is_ajax()) {            
            $identificacion = arr::get($this->request->post(), 'id');
            $proveedor = ORM::factory('Proveedor')->where('identificacion', '=', $identificacion)->find_all();
            if($proveedor->count() > 0){
                echo json_encode(false);
            }
            else{
                echo json_encode(true);
            }
             $this->auto_render = FALSE;
        }
    }

} 
