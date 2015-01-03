<?php defined('SYSPATH') or die('No direct script access.');

/**
 * File: main.php
 * Author: Santiago García
 * Creation Date: 13/07/2014 
 * Last Modified: 
 * Modified By: 
 */
class Controller_Main extends Controller_Containers_Default {
    public function action_index()
    {

        $this->view = View::factory('/controller/main');

        $servicios = ORM::factory('Servicio')->find_all();
        $bug = ORM::factory('Bug');
        
        $filename = NULL;
        if ($this->request->method() == Request::POST)
        {
            $db = Database::instance();
            $db->begin();
            try
            {

                $success_message = Kohana::message('sab', 'main:create:success');
                if (isset($_FILES['imagen']))
                {
                    $filename = $this->_save_image($_FILES['imagen']);
                }

                if ( !$filename)
                {
                    throw new Exception('Hubo un problema al cargar el archivo.');
                }
                $bug->nombre=arr::get($this->request->post(), 'nombre');
                $bug->descripcion=arr::get($this->request->post(), 'descripcion');
                $bug->fechaAparicion=arr::get($this->request->post(), 'fechaAparicion');
                $bug->fechaReporte=arr::get($this->request->post(), 'fechaRep');
                $bug->imagen=URL::base().'uploads/images/'.$filename;
                $bug->servicio_id=arr::get($this->request->post(), 'proyectoid');
                $bug->save();

                $buglog = ORM::factory('Buglogs');
                $buglog->usuario_id=$this->session->get('user_id');
                $buglog->bug_id=$bug->id;
                $buglog->status=$buglog->statusOptions['opened'];
                $buglog->save();


                $db->commit();
                FlashMessenger::factory()->set_message('success', $success_message);          


            
            }  catch (Exception $e){
                $db->rollback();

                FlashMessenger::factory()->set_message('error', $e->getMessage());
            }
            
        }
 
        
        
        $this->view->set("servicios", $servicios);
        
        
        
        $this->view->set("bug", $bug);
       
        
       

    }
    
    protected function _save_image($image)
    {
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'uploads/images/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
            Image::factory($file)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }

   
}


