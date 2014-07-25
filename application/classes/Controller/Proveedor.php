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
            
            try {
                if ($proveedor->id) {
                    $success_message = Kohana::message('sab', 'proveedor:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'proveedor:create:success');
                }
                
                $proveedor->nombre = $_POST['nombre'];
                $proveedor->RUC = $_POST['ruc'];
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
        
        public function action_loadproveedores() {
        if ($this->request->is_ajax()) {
            $ruc = arr::get($this->request->post(), 'RUC');
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
                    ->and_where(DB::expr("LOWER(ruc)"), 'LIKE', DB::expr("_utf8 '%" . $ruc . "%' collate utf8_bin"))
                    ->and_where(DB::expr("LOWER(telefono1)"), 'LIKE', DB::expr("_utf8 '%" . $telefono . "%' collate utf8_bin"))
                    ->find_all();

            $this->view = View::factory('proveedor/loads/loadproveedor');
            $this->view->set("proveedor", $proveedor);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }

} 
