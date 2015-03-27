<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cliente extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('cliente/index');
	}
        
        
        public function action_indexcontacto()
	{
		$this->view = View::factory('cliente/indexcontacto');
	}
        
        public function action_create()
	{
	$this->view = View::factory('cliente/create');

        $cliente = ORM::factory('Cliente', $this->params[0]);
       
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
        
        
        public function action_loadclientes() {
            if ($this->request->is_ajax()) {
                $ruc = arr::get($this->request->post(), 'ruc');
                $nombre = arr::get($this->request->post(), 'nombre');


                 $convert_to = array(
                    "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
                );
                $convert_from = array(
                    "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
                );
                $nombre = str_replace($convert_from, $convert_to, $nombre);


                $clientes = ORM::factory('Cliente')
                        ->where(DB::expr("LOWER(ruc)"), 'LIKE', DB::expr("_utf8 '%" . $ruc . "%' collate utf8_bin"))
    //                    ->and_where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))
                        ->and_where(DB::expr("LOWER(nombreComercial)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))
                        ->find_all();

                $this->view = View::factory('cliente/loads/loadclientes');
                $this->view->set("clientes", $clientes);

                $this->auto_render = FALSE;
                echo $this->view;
            }
        }
        
        
        
    public function action_createcontacto()
	{
	$this->view = View::factory('cliente/createcontacto');

        $contacto = ORM::factory('Contacto');
       
        if (!empty($_POST)) {
                  
            $db = Database::instance();
            $db ->begin();
            try {
                if ($contacto->id) {
                    $success_message = Kohana::message('sab', 'contacto:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'contacto:create:success');
                }
                
                $contacto->direccion = $this->request->post('direccion');
                $contacto->documentoLegal = $this->request->post('documentoLegal');
                $contacto->empresaActual = $this->request->post('empresaActual');
                $contacto->nombreContacto = $this->request->post('nombreContacto');
                $contacto->Cliente_idCliente = $this->request->post('empresah');
             
                $contacto->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
                for($i=1; $i<=$numReg; $i++){
                    $infoContacto = ORM::factory('InformacionContacto');
                    
                    $infoContacto->tipo = $this->request->post('tipo_'.$i);
                    $infoContacto->contenido = arr::get($this->request->post(), 'contenido_'.$i);
                    $infoContacto->observacion = arr::get($this->request->post(), 'observacion_'.$i);
                    $infoContacto->Contacto_idContacto = $contacto->id;
          
                    if($infoContacto->tipo != null || $infoContacto->tipo != ''){
                        $infoContacto->save();
                    }
                    
                    $infoContacto = NULL;
                }
                
                $db->commit();
                
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('cliente/indexcontacto');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                 $db->rollback();
            }
        }

       
        $this->view->set("contacto", $contacto);
	}
        
        
        
        
        public function action_editcontacto()
	{
	$this->view = View::factory('cliente/editcontacto');

        $contacto = ORM::factory('Contacto', $this->params[0]);
        
       
        if (!empty($_POST)) {
                  
            $db = Database::instance();
            $db ->begin();
            try {
                if ($contacto->id) {
                    $success_message = Kohana::message('sab', 'contacto:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'contacto:create:success');
                }
                
                $contacto->direccion = $this->request->post('direccion');
                $contacto->documentoLegal = $this->request->post('documentoLegal');
                $contacto->empresaActual = $this->request->post('empresaActual');
                $contacto->nombreContacto = $this->request->post('nombreContacto');
                $contacto->Cliente_idCliente = $this->request->post('empresah');
             
                $contacto->save();
                $temp=ORM::factory('InformacionContacto')->where('Contacto_idContacto', '=', $contacto->id)->find_all();
                foreach ($temp as $item) {
                    $item->delete();
                }
                $numReg = arr::get($this->request->post(), 'cont');
                for($i=1; $i<=$numReg; $i++){
                    $infoContacto = ORM::factory('InformacionContacto');
                    $infoContacto->tipo = $this->request->post('tipo_'.$i);
                    $infoContacto->contenido = arr::get($this->request->post(), 'contenido_'.$i);
                    $infoContacto->observacion = arr::get($this->request->post(), 'observacion_'.$i);
                    $infoContacto->Contacto_idContacto = $contacto->id;
          
                    if($infoContacto->tipo != null || $infoContacto->tipo != ''){
                        $infoContacto->save();
                    }
                    
                    $infoContacto = NULL;
                }
                
                $db->commit();
                
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('cliente/indexcontacto');
                
            } catch (Database_Exception $ex) {
                foreach ($ex->errors('validation') as $error) {
                    FlashMessenger::factory()->set_message('error', $error);
                }
                 $db->rollback();
            }
        }

       
        $this->view->set("contacto", $contacto);
        $tipo=ORM::factory('InformacionContacto')->_tipo;
        $this->view->set("_tipo",$tipo );
	}
        
        
        
    public function action_autocompletercliente() {
        if ($this->request->is_ajax()) {
            $data = arr::get($this->request->query(), 'q');

            //GET A LIST OF CUSTOMERS TO LOAD THE AUTOCOMPLETER

            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $data = str_replace($convert_from, $convert_to, $data);


            $clientes = ORM::factory('Cliente')
                    ->where(DB::expr("LOWER(id)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(RUC)"), 'LIKE', DB::expr("'%" . $data . "%'"))
                    ->or_where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(nombreComercial)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->find_all();

            if ($clientes->count()) {
                foreach ($clientes as $cliente) {
                    echo $cliente->id . '|' . $cliente->RUC . '|' . $cliente->nombre . "\n";
                }
            } else {
                echo '0' . "\n";
            }
            $this->auto_render = FALSE;
        }
             
    }
    
     public function action_loadinformacion() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('cliente/loads/loadinformacion');
            $cont = arr::get($this->request->post(), 'cont');
            $tipo=ORM::factory('InformacionContacto')->_tipo;
            $this->view->set('_tipo', $tipo);
            $this->view->set('cont', $cont);
            echo $this->view;
            $this->auto_render = FALSE;
        }
    }
    
    
        public function action_checkIdentificacion() {
        if ($this->request->is_ajax()) {            
            $documento = arr::get($this->request->post(), 'documento');
            $id=arr::get($this->request->post(), 'id');
            $cliente = ORM::factory('Contacto')->where('documentoLegal', '=', $documento)->where('id', '!=', $id)
                    ->find_all();
            if($cliente->count() > 0){
                echo json_encode(false);
            }
            else{
                echo json_encode(true);
            }
             $this->auto_render = FALSE;
        }
    }
    
    
    public function action_loadcontacto() {
            if ($this->request->is_ajax()) {
                $cliente = arr::get($this->request->post(), 'cliente');
                $nombre = arr::get($this->request->post(), 'nombre');
                $empresa=arr::get($this->request->post(), 'empresah');
                 $documento=arr::get($this->request->post(), 'documentoLegal');

                 $convert_to = array(
                    "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
                );
                $convert_from = array(
                    "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
                );
                $nombre = str_replace($convert_from, $convert_to, $nombre);
                $cliente = str_replace($convert_from, $convert_to, $cliente);


                $contactos = ORM::factory('Contacto')
                        ->where(DB::expr("LOWER(nombreContacto)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))
                        ->and_where(DB::expr("LOWER(documentoLegal)"), 'LIKE', DB::expr("_utf8 '%" . $documento . "%' collate utf8_bin"));
                if ($cliente!=null)    
                {    
                $contactos->and_where("Cliente_idCliente", '=',$empresa.'');
                }

                $contactos=$contactos ->find_all();

                $this->view = View::factory('cliente/loads/loadcontacto');
                $this->view->set("contactos", $contactos);

                $this->auto_render = FALSE;
                echo $this->view;
            }
        }
    
} 