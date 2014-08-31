<?php defined('SYSPATH') or die('No direct script access.');

class Exception_Unauthorized extends Kohana_Exception
{
    public static function handler(Exception $e)
    {
                $response = new Response;
                $response->status(403);
                $view = View::factory('exception/custom');
                $view->message = 'Usted no tiene permiso para acceder a esta p&aacute;gina';
                $template = View::factory('containers/exception')->bind('content', $view);
                echo $response->body($template)->send_headers()->body();
                return TRUE;
    }
}