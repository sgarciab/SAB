<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * Clase que será extendida por los controladores para manejar las vistas.
 * Usa una arquitectura de plantillas con un contenedor como base donde cada
 * vista de una acción se presenta en el atributo $content del Template.
 * @author Mario López - CRIFA CIA. LTDA.
 * 
 */
class Controller_Containers_Login extends Controller_Template {

    /**
     * El contenedor que va utilizar el controlador.
     * Debe referirse a un archivo .php que se encuentra en
     * la carpeta views.
     * @var String
     */
    public $template = 'containers/login';
    public $params = array();
    protected $session;
    protected $current_user;

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::before()
     */
    public function before()
    {
        //Required because we are extending Controller_Template
        parent::before();
        $this->initializeSession();

        if ($this->auto_render)
        {
            //Sets the "Default" title set on the container
            $this->template->title = 'LOGIN';
            $this->template->content = '';

            $this->template->styles = array();
            $this->template->scripts = array();
        }

        // Convert params into array
        $this->params = explode('/', $this->request->param('params'));

        // Check if a user is logged in
        if (!$this->current_user
                && $this->request->controller() != 'login'
                && $this->request->action() != 'index')
        {
            HTTP::redirect('/login');
        }

        //Cleans the view so that every action can set it 
        //by itself without problems
    }

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::after()
     */
    public function after()
    {
        if ($this->auto_render)
        {
            $action = $this->request->action();
            $controller = $this->request->controller();

            //Build the styles array
            $css_file = 'media/css/controllers/' . $controller . '/' . $action . '.css';
            $styles = array(
                'media/css/blueprint/screen.css' => 'screen, projection',
                'media/css/blueprint/print.css' => 'print',
                'media/css/jquery-ui/smoothness/jquery-ui-1.8.16.custom.css' => 'all',
                'media/css/dataTables/TableTools.css' => 'screen',
                'media/css/dataTables/TableTools_JUI.css' => 'screen',
                'media/css/dataTables/demo_table_jui.css' => 'screen',
                'media/css/blueprint/ie.css' => 'print',
                'media/css/styles.css' => 'screen',
            );

            //VALIDATING FILE
            if (file_exists($css_file))
            {
                $styles = array_merge($styles, array($css_file => 'screen'));
            }

            //Build the scripts array
            $js_file = 'media/js/controller/' . $controller . '/' . $action . '.js';
            $scripts = array(
                'media/js/jqueryLibrary/jquery-1.6.2.min.js',
                'media/js/jqueryLibrary/jquery-ui-1.8.16.custom.min.js',
                'media/js/jqueryLibrary/jquery-validation.js',
                'media/js/dataTables/jquery.dataTables.js',
                'media/js/dataTables/TableTools.js',
                'media/js/dataTables/ZeroClipboard.js',
                
                
            );

            //VALIDATING FILE
            if (file_exists($js_file))
            {
                $scripts = array_merge($scripts, array($js_file));
            }

            //Set styles and scripts on the template (container). This can also be
            //done from any action method
            $this->template->styles = array_merge($styles, $this->template->styles);
            $this->template->scripts = array_merge($scripts, $this->template->scripts);

            //If $this->view is set display it on the 
            //containers $content
        }

        //Required because we are extending Controller_Template
        parent::after();
    }

    private function initializeSession()
    {
        $this->session = Session::instance();
        if (!$this->session->get('user_id'))
        {
            if (!isset($_COOKIE['login']))
            {
                $this->session->set('user_id', 0);
            }
        }

        if ($this->session->get('user_id') > 0)
        {
            $this->current_user = new Model_User($this->session->get('user_id'));
            if (!$this->current_user->loaded())
            {
                $this->current_user = null;
            }
        }
    }

    protected function login($user_id)
    {
         
        $user = ORM::factory("User", $user_id);
        if (!$user->loaded())
            return false;
         
        $this->session->set('user_id', $user->id);
        return true;
    }

    protected function logout()
    {
        $this->session->set('user_id', 0);
        return true;
        
    }

}