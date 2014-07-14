<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-13 23:07:52 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Cliente' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-13 23:07:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-13 23:10:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: customer ~ APPPATH\views\cliente\create.php [ 4 ] in C:\xampp\htdocs\SAB\application\views\cliente\create.php:4
2014-07-13 23:10:28 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\cliente\create.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\SAB\application\views\containers\default.php(75): Kohana_View->__toString()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(160): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\SAB\application\views\cliente\create.php:4
2014-07-13 23:10:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: customer ~ APPPATH\views\cliente\create.php [ 48 ] in C:\xampp\htdocs\SAB\application\views\cliente\create.php:48
2014-07-13 23:10:52 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\cliente\create.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 48, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\SAB\application\views\containers\default.php(75): Kohana_View->__toString()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(160): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\SAB\application\views\cliente\create.php:48
2014-07-13 23:20:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nombre ~ APPPATH\classes\Controller\Cliente.php [ 26 ] in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:26
2014-07-13 23:20:51 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Cliente->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:26
2014-07-13 23:21:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: nombre ~ APPPATH\classes\Controller\Cliente.php [ 26 ] in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:26
2014-07-13 23:21:39 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Cliente->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:26