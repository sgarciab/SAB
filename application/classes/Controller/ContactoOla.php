<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ContactoOla extends Controller_Containers_Default {

	public function action_index()
	{
		$this->view = View::factory('ola/index');
	}                
        
        public function action_createcontactoola()
	{
	$this->view = View::factory('ola/createcontactoola');

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
                
                $contactoOla->direccion = $this->request->post('direccion');
                $contactoOla->documentoLegal = $this->request->post('documentoLegal');
                $contactoOla->empresaActual = $this->request->post('empresaActual');
                $contactoOla->nombreContacto = $this->request->post('nombreContacto');
                $contactoOla->Ola_idOla = $this->request->post('refOla');
             
                $contactoOla->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
                for($i=1; $i<=$numReg; $i++){
                    $infoContactoOla = ORM::factory('InformacionContactoOla');
                    
                    $infoContactoOla->tipo = $this->request->post('tipo_'.$i);
                    $infoContactoOla->contenido = arr::get($this->request->post(), 'contenido_'.$i);
                    $infoContactoOla->observacion = arr::get($this->request->post(), 'observacion_'.$i);
                    $infoContactoOla->Contacto_idContacto = $contacto->id;
          
                    if($infoContactoOla->tipo != null || $infoContactoOla->tipo != ''){
                        $infoContactoOla->save();
                    }
                    
                    $infoContactoOla = NULL;
                }
                
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

       
        $this->view->set("contactoOla", $contactoOla);
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
                    echo $ola->id . '|' . $ola->criticidad . '|' . $ola->tiempoRespuesta . '|' . $ola->decripcion . "\n";
                }
            } else {
                echo '0' . "\n";
            }
            $this->auto_render = FALSE;
        }
             
    }
    
     public function action_loadinformacion() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('ola/loads/loadinformacion');
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
            $contactoOla = ORM::factory('Contacto')->where('documentoLegal', '=', $documento)->find_all();
            if($contactoOla->count() > 0){
                echo json_encode(false);
            }
            else{
                echo json_encode(true);
            }
             $this->auto_render = FALSE;
        }
    }
    
} 