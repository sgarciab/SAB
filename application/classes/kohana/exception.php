<?php defined('SYSPATH') or die('No direct script access.');

class Kohana_Exception extends Kohana_Kohana_Exception {
    /**
     * Overriden to show custom page for errors
     */
    public static function handler(Exception $e)
    {
        switch (get_class($e))
        {
            case 'Exception_Unauthorized':
                $response = new Response;
                $response->status(403);
                $view = View::factory('exception/custom');
                $view->message = 'Usted no tiene permiso para acceder a esta p&aacute;gina';
                $template = View::factory('containers/exception')->bind('content', $view);
                echo $response->body($template)->send_headers()->body();
                return TRUE;
                break;
                
            case 'Exception_ContentNotFound':
                $response = new Response;
                $response->status(404);
                $view = View::factory('exception/custom');
                $view->message = 'El contenido que usted est&aacute; buscando no existe';
                $template = View::factory('containers/exception')->bind('content', $view);
                echo $response->body($template)->send_headers()->body();              
                return TRUE;
                break;
            
            case 'HTTP_Exception_404':
                $response = new Response;
                $response->status(404);
                $view = View::factory('exception/custom');
                $view->message = 'La p&aacute;gina que usted solicita no existe.';
                $template = View::factory('containers/exception')->bind('content', $view);
                echo $response->body($template)->send_headers()->body();
                return TRUE;
                break;

            default:
                return Kohana_Kohana_Exception::handler($e);
                break;
        }
    }
}
