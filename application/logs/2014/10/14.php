<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-14 22:38:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _frecuencia ~ APPPATH\views\servicio\edit.php [ 57 ] in C:\xampp\htdocs\SAB\application\views\servicio\edit.php:57
2014-10-14 22:38:50 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\servicio\edit.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 57, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\SAB\application\views\containers\default.php(75): Kohana_View->__toString()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\SAB\application\views\servicio\edit.php:57
2014-10-14 22:41:11 --- CRITICAL: Kohana_Exception [ 0 ]: The _frecuencia property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-10-14 22:41:11 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_frecuencia')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(108): Kohana_ORM->__get('_frecuencia')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-10-14 22:55:23 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH\classes\Controller\Servicio.php [ 152 ] in file:line
2014-10-14 22:55:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'C:\\xampp\\htdocs...', 152, Array)
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(152): fopen('', 'r')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-14 23:09:47 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH\classes\Controller\Servicio.php [ 152 ] in file:line
2014-10-14 23:09:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'C:\\xampp\\htdocs...', 152, Array)
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(152): fopen('', 'r')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-10-14 23:15:44 --- CRITICAL: ErrorException [ 2 ]: fopen(): Filename cannot be empty ~ APPPATH\classes\Controller\Servicio.php [ 152 ] in file:line
2014-10-14 23:15:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(): Filena...', 'C:\\xampp\\htdocs...', 152, Array)
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(152): fopen('', 'r')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in file:line