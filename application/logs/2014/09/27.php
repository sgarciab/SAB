<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-27 14:18:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function sql_quote() ~ APPPATH\classes\Controller\Servicio.php [ 66 ] in file:line
2014-09-27 14:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 14:19:51 --- CRITICAL: Kohana_Exception [ 0 ]: The nombre property does not exist in the Model_ArchivoRespaldo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:702
2014-09-27 14:19:51 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('nombre', 'sab20140709.sql')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(66): Kohana_ORM->__set('nombre', 'sab20140709.sql')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:702
2014-09-27 14:20:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Exception::errors() ~ APPPATH\classes\Controller\Servicio.php [ 85 ] in file:line
2014-09-27 14:20:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 16:14:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Globalfunctions' not found ~ APPPATH\classes\Controller\profile.php [ 88 ] in file:line
2014-09-27 16:14:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:06:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Globalfunctions' not found ~ APPPATH\classes\Controller\user.php [ 185 ] in file:line
2014-09-27 17:06:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-27 17:06:41 --- CRITICAL: Kohana_Exception [ 0 ]: The document property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-09-27 17:06:41 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('document')
#1 C:\xampp\htdocs\SAB\application\views\user\acount.php(17): Kohana_ORM->__get('document')
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
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603