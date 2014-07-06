<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-06 11:24:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\containers\default.php [ 44 ] in file:line
2014-07-06 11:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-06 11:46:24 --- CRITICAL: View_Exception [ 0 ]: The requested view /controller/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-06 11:46:24 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/controller/log...')
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(30): Kohana_View->__construct('/controller/log...', NULL)
#2 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(24): Kohana_View::factory('/controller/log...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-06 11:47:22 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::instance() ~ APPPATH\classes\Controller\containers\default.php [ 44 ] in file:line
2014-07-06 11:47:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-06 11:57:51 --- CRITICAL: View_Exception [ 0 ]: The requested view /controller/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-06 11:57:51 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/controller/log...')
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(30): Kohana_View->__construct('/controller/log...', NULL)
#2 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(24): Kohana_View::factory('/controller/log...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-06 12:17:52 --- CRITICAL: ErrorException [ 1 ]: Class 'FlashMessenger' not found ~ APPPATH\views\containers\login.php [ 51 ] in file:line
2014-07-06 12:17:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-06 12:18:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::authenticate() ~ APPPATH\classes\Controller\login.php [ 28 ] in file:line
2014-07-06 12:18:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line