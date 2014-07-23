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
class Controller_Containers_Default extends Controller_Template {

    /**
     * El contenedor que va utilizar el controlador.
     * Debe referirse a un archivo .php que se encuentra en
     * la carpeta views.
     * @var String
     */
    public $template = 'containers/default';
    public $view;
    public $params = array();
    public $current_user;

    /**
     * El atributo que va a ser utilizado en cada acción
     * NULL por defecto
     * @var View
     */

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::before()
     */
    public function before() {
        //Required because we are extending Controller_Template
        parent::before();
        $this->initializeSession();

        // Check if a user is logged in
        if (!$this->current_user
                && $this->request->controller() != 'login'
                && $this->request->action() != 'login') {
            HTTP::redirect('login/');
        }

        if ($this->current_user) {
            $this->template->current_user = $this->current_user;
        }

//		Verify if the user has access permission to the requested url
        if ($this->request->controller() != "main" && $this->request->controller() != "login" && $this->request->controller() != "rpc" &&
 /*aqui debo poner la negacion para permisos */  $this->current_user->has_access_permission($this->request->controller(), $this->request->action()))
            throw new Exception_Unauthorized;

        $this->params = explode('/', $this->request->param('id'));



        if ($this->auto_render) {
            //Sets the "Default" title set on the container
            $this->template->title = 'Sistema de Administración de Bugs';
            $this->template->content = '';

            $this->template->styles = array();
            $this->template->scripts = array();
        }



        //Cleans the view so that every action can set it 
        //by itself without problems
    }

    /**
     * @see system/classes/kohana/controller/Kohana_Controller_Template::after()
     */
    public function after() {
        if ($this->auto_render) {
            $action = $this->request->action();
            $controller = $this->request->controller();

            //Build the styles array
            $css_file = 'media/css/controllers/admin/' . $controller . '/' . $action . '.css';
            $styles = array(
                'media/css/blueprint/screen.css' => 'screen, projection',
                'media/css/blueprint/print.css' => 'print',
                'media/css/jquery-ui/smoothness/jquery-ui-1.8.16.custom.css' => 'all',
                'media/css/dataTables/TableTools.css' => 'screen',
                'media/css/dataTables/TableTools_JUI.css' => 'screen',
                'media/css/jquery.dataTables.css' => 'screen',
                'media/css/src/ie.css' => 'screen, projection',
                'media/css/blueprint/ie.css' => 'print',
                'media/css/styles.css' => 'screen',
                'media/css/jquery.autocomplete.css' => 'screen',
                'media/css/superfish.css' => 'screen',
                'media/css/jquery-ui/jquery-ui.css' => 'screen',
                'media/css/jquery.combobox.css' => 'screen',
            );

            //VALIDATING FILE
            if (file_exists($css_file)) {
                $styles = array_merge($styles, array($css_file => 'screen'));
            }

            //Build the scripts array
            $js_file = 'media/js/controller/admin/' . $controller . '/' . $action . '.js';
            $scripts = array(
                //'media/js/jqueryLibrary/jquery-1.6.2.min.js',
                'media/js/jqueryLibrary/jquery-1.8.2.js',
                'media/js/jqueryLibrary/jquery-ui.js',
                'media/js/jqueryLibrary/jquery-ui-1.9.0.custom.js',
                'media/js/jqueryLibrary/jquery-ui-1.9.0.custom.min.js',
                'media/js/jqueryLibrary/jquery.combobox.js',
                'media/js/jqueryLibrary/jquery-validation.js',
                'media/js/jquery.autocomplete.js',
                'media/js/jqueryLibrary/jquery.jqpagination.min.js',
                'media/js/dataTables/jquery.dataTables.js',
                'media/js/dataTables/TableTools.js',
                'media/js/dataTables/ZeroClipboard.js',
                'media/js/globalfunctions.js',
                'media/js/menu/superfish.js',
                'media/js/menu/hoverIntent.js',
                'media/js/jquery.fastLiveFilter.js'
            );

            //VALIDATING FILE
            if (file_exists($js_file)) {
                $scripts = array_merge($scripts, array($js_file));
            }


            //Set styles and scripts on the template (container). This can also be
            //done from any action method
            $this->template->styles = array_merge($styles, $this->template->styles);
            $this->template->scripts = array_merge($scripts, $this->template->scripts);
            $this->template->content = $this->view;

            $user_id = Session::instance()->get('user_id');
            $current_user = ORM::factory('User', $user_id);
            //Get Menu		
            $menu = $this->_get_new_menu(NULL, $current_user->profile_id);



            if ($menu) {
                $this->template->menu = $menu;
            } else {
                $this->template->menu = false;
            }



            //If $this->view is set display it on the 
            //containers $content
            //$this->template->content = $this->view;
        }

        //Required because we are extending Controller_Template
        parent::after();
    }

    private function _get_new_menu($option = NULL, $profile) {

        $this_level_items = ORM::factory('Profile')->get_profile_action($option, $profile);
        $cont = 1;
        $result = '';
        if ($this_level_items != FALSE) {//if exist this level
            foreach ($this_level_items as $current_item) {
                $style = (strlen($current_item['name']) > 15 ) ? "style='padding-top:8px;'" : "style='padding-top:15px;'";

                $result .= "<li class=color_" . $cont . "   ><a href=\"";
                if ($current_item['link'] != '#')
                    $result .= Url::site($current_item['link']);
                else
                    $result .= '#';
                $result .= "\"" . $style . ">" . $current_item['name'] . "</a>";
                $next = self::_get_new_menu($current_item['id'], $profile);
                if ($next != '') {
                    $result .= "<ul>" . $next . "</ul>";
                }
                $result .= "</li>";
                $cont++;
            }
        }
        else
            return $result;
        return $result . "\n";
    }

    private function initializeSession() {
        $this->session = Session::instance();
        if (!$this->session->get('user_id')) {
            if (!isset($_COOKIE['login'])) {
                $this->session->set('user_id', 0);
            } else {
                $token = ORM::factory("AuthToken", $_COOKIE['login']);
                if ($token->loaded() && $token->expiration_date < gmdate('Y-m-d H:i:s')) {
                    $token->delete();
                    setcookie('login', '', time() - 60, '/');
                } else {
                    $this->session->set('user_id', $token->user_id);
                }
            }
        }

        if ($this->session->get('user_id') > 0) {
            $this->current_user = new Model_User($this->session->get('user_id'));
            if (!$this->current_user->loaded()) {
                $this->current_user = null;
            }
        }
    }

}
