<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-21 00:02:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Util' not found ~ APPPATH\views\controller\main.php [ 19 ] in file:line
2014-11-21 00:02:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 00:04:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Util' not found ~ APPPATH\views\controller\main.php [ 19 ] in file:line
2014-11-21 00:04:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 00:04:40 --- CRITICAL: ErrorException [ 1 ]: Class 'Util' not found ~ APPPATH\views\controller\main.php [ 19 ] in file:line
2014-11-21 00:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 00:09:14 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'randomColor' ~ APPPATH\views\controller\main.php [ 19 ] in file:line
2014-11-21 00:09:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 00:09:41 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Util::randomColor() should not be called statically ~ APPPATH\views\controller\main.php [ 19 ] in C:\xampp\htdocs\SAB\application\views\controller\main.php:19
2014-11-21 00:09:41 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\controller\main.php(19): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\\xampp\\htdocs...', 19, Array)
#1 C:\xampp\htdocs\SAB\application\views\controller\main.php(19): Util::randomColor()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\SAB\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\SAB\application\views\controller\main.php:19