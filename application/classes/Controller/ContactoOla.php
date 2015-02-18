<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ContactoOla extends Controller_Containers_Default {

	public function action_indexcontactoola()
	{
		$this->view = View::factory('contactoola/indexcontactoola');
	}                
        
        public function action_createcontactoola()
	{
	$this->view = View::factory('contactoola/createcontactoola');

        $contactoOla = ORM::factory('ContactoOla');
       
        if (!empty($_POST)) {
                  
            $db = Database::instance();
            $db ->begin();
            try {
                if ($contactoOla->id) {
                    $success_message = Kohana::message('sab', 'contacto:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'contacto:create:success');
                }
                
                $contactoOla->direccion = $this->request->post('direccionOla');
                $contactoOla->documentoLegal = $this->request->post('documentoLegalOla');
//                $contactoOla->empresaActual = $this->request->post('empresaActual');
                $contactoOla->nombreContacto = $this->request->post('nombreContactoOla');
                $contactoOla->OLA_idOLA = $this->request->post('relacionOlah');
                
//                var_dump($this->request->post());
//                die;
                
                $contactoOla->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
//                for($i=1; $i<=$numReg; $i++){
//                    $infoContactoOla = ORM::factory('InformacionContactoOla');
//                    
//                    $infoContactoOla->tipo = $this->request->post('tipo_'.$i);
//                    $infoContactoOla->contenido = arr::get($this->request->post(), 'contenido_'.$i);
//                    $infoContactoOla->observacion = arr::get($this->request->post(), 'observacion_'.$i);
//                    $infoContactoOla->Contacto_idContacto = $contacto->id;
//          
//                    if($infoContactoOla->tipo != null || $infoContactoOla->tipo != ''){
//                        $infoContactoOla->save();
//                    }
//                    
//                    $infoContactoOla = NULL;
//                }
                
                $db->commit();
                
                
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('ola/index');
                
            } catch (Exception $ex) {
//                foreach ($ex->errors('validation') as $error) {
//                    FlashMessenger::factory()->set_message('error', $error);
//                }
//                var_dump($ex->getMessage());
                
                $db->rollback();
                throw new Exception($ex->getMessage());
            }
        }

       
        $this->view->set("contactoOla", $contactoOla);
	}
        
    public function action_editcontactoola()
	{
	$this->view = View::factory('contactoola/editcontactoola');

        $contacto = ORM::factory('ContactoOla', $this->params[0]);
        
       
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
                $contacto->OLA_idOLA = $this->request->post('olah');
             
                $contacto->save();
                $temp = ORM::factory('InformacionContacto')->where('OLA_idOLA', '=', $contacto->id)->find_all();
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
                HTTP::redirect('contactoola/indexcontactoola');
                
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
        
        
    public function action_autocompleterola() {
        if ($this->request->is_ajax()) {
            $data = arr::get($this->request->query(), 'q');

            //LISTA DE OLAs

            $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $data = str_replace($convert_from, $convert_to, $data);


            $olas = ORM::factory('Ola')
                    ->where(DB::expr("id"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(criticidad)"), 'LIKE', DB::expr("'%" . $data . "%'"))
                    ->or_where(DB::expr("LOWER(tiempoRespuesta)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->or_where(DB::expr("LOWER(descripcion)"), 'LIKE', DB::expr("_utf8 '%" . $data . "%' collate utf8_bin"))
                    ->find_all();

            if ($olas->count()) {
                foreach ($olas as $ola) {
                    echo $ola->id . '|' . $ola->criticidad . '|' . $ola->tiempoRespuesta . '|' . $ola->descripcion . "\n";
                }
            } else {
                echo '0' . "\n";
            }
            $this->auto_render = FALSE;
        }
             
    }
    
    
    public function action_loadinformacion() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('contactoola/loads/loadinformacion');
            $cont = arr::get($this->request->post(), 'cont');
            $tipo=ORM::factory('InformacionContactoOla')->_tipo;
            $this->view->set('_tipo', $tipo);
            $this->view->set('cont', $cont);
            echo $this->view;
            $this->auto_render = FALSE;
        }
    }
    
    
    public function action_checkIdentificacion() {
        if ($this->request->is_ajax()) {            
            $documento = arr::get($this->request->post(), 'documento');
            $contactoOla = ORM::factory('Contacto')->where('documentoLegal', '=', $documento)->where('id', '!=', $id)->find_all();                                   
            if($contactoOla->count() > 0){
                echo json_encode(false);
            }
            else{
                echo json_encode(true);
            }
             $this->auto_render = FALSE;
        }
    }
    
    //Por corregir
    public function action_loadcontactoola() {
            if ($this->request->is_ajax()) {
                $ola = arr::get($this->request->post(), 'ola');
                $nombre = arr::get($this->request->post(), 'nombre');
                $olah = arr::get($this->request->post(), 'olah');
                $documento = arr::get($this->request->post(), 'documentoLegal');

                $convert_to = array(
                    "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
                );
                $convert_from = array(
                    "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
                );
                $nombre = str_replace($convert_from, $convert_to, $nombre);
                $ola = str_replace($convert_from, $convert_to, $ola);

                $contactos = ORM::factory('ContactoOla')
                        ->where(DB::expr("LOWER(nombreContacto)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"))
                        ->and_where(DB::expr("LOWER(documentoLegal)"), 'LIKE', DB::expr("_utf8 '%" . $documento . "%' collate utf8_bin"));
                if ($ola!=null)    
                {    
                $contactos->and_where("OLA_idOLA", '=',$ola.'');
                }

                $contactos = $contactos->find_all();

                $this->view = View::factory('contactoola/loads/loadcontactoola');
                $this->view->set("contactosola", $contactos);

                $this->auto_render = FALSE;
                echo $this->view;
            }
        }
    
} 