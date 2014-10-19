<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servicio extends Controller_Containers_Default {
    
    
    public function action_index()
	{
		$this->view = View::factory('servicio/index');
	}
        
        
        
    public function action_create()
	{
	$this->view = View::factory('servicio/create');
        
        $servicio = ORM::factory('Servicio');  
        
        
        if (!empty($_POST)) {
            
            
            $db = Database::instance();
            $db ->begin();
            try {
                 
                if ($servicio->id) {
                    $success_message = Kohana::message('sab', 'servicio:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'servicio:create:success');
                }
                
                $servicio->Nombre = $this->request->post('nombre');
                $servicio->Cliente_idCliente = $this->request->post('empresah');
                
                $servicio->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
                
                for($i=1; $i<=$numReg; $i++){
                    $respaldo = ORM::factory('Respaldo');
                    
                    $respaldo->frecuencia = $this->request->post('frecuencia_'.$i);
                    $respaldo->fechaInicio = arr::get($this->request->post(), 'fechainicio_'.$i);
                    $respaldo->fechafin = arr::get($this->request->post(), 'fechafin_'.$i);
                    if ($i==$numReg)
                       $respaldo->estado='A';
                    else
                       $respaldo->estado='I'; 
                    $respaldo->Servicio_idServicio = $servicio->id;
          
                    if($respaldo->frecuencia != null || $respaldo->frecuencia != ''){
                        $respaldo->save();
                    }
                    
                    $numArc = arr::get($this->request->post(), 'counter_'.$i);
                    for($j=1; $j<=$numArc; $j++){
                        $archivo = ORM::factory('ArchivoRespaldo');

                        $archivo->autor = $this->request->post('autor_'.$i.'_'.$j);
                        
                        $fh = fopen($_FILES['archivo_'.$i.'_'.$j]['tmp_name'],'r');
                        $archivo->archivo = fread($fh, filesize($_FILES['archivo_'.$i.'_'.$j]['tmp_name']));
                        fclose($fh);
                        
                        $archivo->nombreArchivo = $_FILES['archivo_'.$i.'_'.$j]['name'];
                        
                        $archivo->Respaldo_idRespaldo=$respaldo->id;
                        if($archivo->archivo != null || $archivo->archivo != ''){
                            $archivo->save();
                        }

                         $archivo=null;
                    }
                    
                    
                    $respaldo = NULL;
                }
                
                
                $db->commit();
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('servicio/index');
                
            } catch (Database_Exception $ex) {
                    
                    FlashMessenger::factory()->set_message('error', $ex->getMessage());
          
                 $db->rollback();
                 var_dump($ex->getCode());
                 die($ex->getLine());
            }
        }

       
        $this->view->set("servicio", $servicio);
        
        
        }   
        
        
    
        public function action_edit()
	{
	$this->view = View::factory('servicio/edit');
        
        $servicio = ORM::factory('Servicio', $this->params[0]);  
        $_frecuencia=ORM::factory('Respaldo')->_frecuencia;
        
        if (!empty($_POST)) {
            
            
            $db = Database::instance();
            $db ->begin();
            try {
                 
                if ($servicio->id) {
                    $success_message = Kohana::message('sab', 'servicio:update:success');
                } else {
                    $success_message = Kohana::message('sab', 'servicio:create:success');
                }
                
                $servicio->Nombre = $this->request->post('nombre');
                $servicio->Cliente_idCliente = $this->request->post('empresah');
                
                $servicio->save();
                
                $numReg = arr::get($this->request->post(), 'cont');
                
                for($i=1; $i<=$numReg; $i++){
                    $respaldo = ORM::factory('Respaldo');
                    
                    $respaldo->frecuencia = $this->request->post('frecuencia_'.$i);
                    $respaldo->fechaInicio = arr::get($this->request->post(), 'fechainicio_'.$i);
                    $respaldo->fechafin = arr::get($this->request->post(), 'fechafin_'.$i);
                    if ($i==$numReg)
                       $respaldo->estado='A';
                    else
                       $respaldo->estado='I'; 
                    $respaldo->Servicio_idServicio = $servicio->id;
          
                    if($respaldo->frecuencia != null || $respaldo->frecuencia != ''){
                        $respaldo->save();
                    }
                    
                    $numArc = arr::get($this->request->post(), 'counter_'.$i);
                    for($j=1; $j<=$numArc; $j++){
                        $archivo = ORM::factory('ArchivoRespaldo');

                        $archivo->autor = $this->request->post('autor_'.$i.'_'.$j);
                        
                        $fh = fopen($_FILES['archivo_'.$i.'_'.$j]['tmp_name'],'r');
                        $archivo->archivo = fread($fh, filesize($_FILES['archivo_'.$i.'_'.$j]['tmp_name']));
                        fclose($fh);
                        
                        $archivo->nombreArchivo = $_FILES['archivo_'.$i.'_'.$j]['name'];
                        
                        $archivo->Respaldo_idRespaldo=$respaldo->id;
                        if($archivo->archivo != null || $archivo->archivo != ''){
                            $archivo->save();
                        }

                         $archivo=null;
                    }
                    
                    
                    $respaldo = NULL;
                }
                
                
                $db->commit();
                FlashMessenger::factory()->set_message('success', $success_message);
                HTTP::redirect('servicio/index');
                
            } catch (Database_Exception $ex) {
                    
                    FlashMessenger::factory()->set_message('error', $ex->getMessage());
          
                 $db->rollback();
                 var_dump($ex->getCode());
                 die($ex->getLine());
            }
        }

       
        $this->view->set("servicio", $servicio);
        
        $this->view->set("_frecuencia", $_frecuencia);
        
        
        }  
        
        
        
    public function action_loadservicios() {
        if ($this->request->is_ajax()) {
          
            $nombre = arr::get($this->request->post(), 'nombre');
             $empresa = arr::get($this->request->post(), 'empresa');
              $empresah = arr::get($this->request->post(), 'empresah');
          
             $convert_to = array(
                "a", "e", "i", "o", "u", "a", "e", "i", "o", "u", "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"
            );
            $convert_from = array(
                "á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"
            );
            $nombre = str_replace($convert_from, $convert_to, $nombre);

         
            $servicios = ORM::factory('Servicio')                    
                    ->where(DB::expr("LOWER(nombre)"), 'LIKE', DB::expr("_utf8 '%" . $nombre . "%' collate utf8_bin"));
           if ($empresah!=null)
            $servicios->and_where('Cliente_idCliente', 'LIKE', $empresah);
           
                   $servicios=$servicios->find_all();

            $this->view = View::factory('servicio/loads/loadservicios');
            $this->view->set("servicios", $servicios);
           
            $this->auto_render = FALSE;
            echo $this->view;
        }
    }
    
    public function action_loadrespaldo() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('servicio/loads/loadrespaldo');
            $cont = arr::get($this->request->post(), 'cont');
            $_frecuencia=ORM::factory('Respaldo')->_frecuencia;
            $this->view->set('_frecuencia', $_frecuencia);
            $this->view->set('cont', $cont);
            echo $this->view;
            $this->auto_render = FALSE;
        }
    }
    
    
     public function action_loadarchivo() {
        if ($this->request->is_ajax()) {
            $this->view = View::factory('servicio/loads/loadarchivo');
            $cont = arr::get($this->request->post(), 'cont');
            $innercount = arr::get($this->request->post(), 'innercount');
            $this->view->set('innercount', $innercount);
            $this->view->set('cont', $cont);
            echo $this->view;
            $this->auto_render = FALSE;
        }
    }
    
    
     public function action_descargarRespaldo() {
            
         $archivo = ORM::factory('ArchivoRespaldo', $this->params[0]); 
          header("Content-type: text/plain");
          header("Content-Disposition: attachment; filename=".$archivo->nombreArchivo);    
          echo $archivo->archivo; 
    }
}