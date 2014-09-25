<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-24 21:47:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: innercount ~ APPPATH\views\servicio\loads\loadarchivo.php [ 2 ] in C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php:2
2014-09-24 21:47:20 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(101): Kohana_View->__toString()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_loadarchivo()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php:2
2014-09-24 21:49:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: innercount ~ APPPATH\views\servicio\loads\loadarchivo.php [ 2 ] in C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php:2
2014-09-24 21:49:06 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 2, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(101): Kohana_View->__toString()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_loadarchivo()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\SAB\application\views\servicio\loads\loadarchivo.php:2