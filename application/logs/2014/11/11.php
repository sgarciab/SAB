<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-11 21:30:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Globalfunctions' not found ~ APPPATH\classes\Controller\user.php [ 92 ] in file:line
2014-11-11 21:30:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 21:32:49 --- CRITICAL: Kohana_Exception [ 0 ]: The document property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:32:49 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('document')
#1 C:\xampp\htdocs\sab\application\views\user\create.php(17): Kohana_ORM->__get('document')
#2 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\sab\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\sab\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:35:04 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:35:04 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 C:\xampp\htdocs\sab\application\views\user\create.php(36): Kohana_ORM->__get('firstname')
#2 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\sab\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\sab\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:35:58 --- CRITICAL: Kohana_Exception [ 0 ]: The username property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:35:58 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('username')
#1 C:\xampp\htdocs\sab\application\views\user\create.php(54): Kohana_ORM->__get('username')
#2 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\sab\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\sab\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:37:47 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 80 ] in file:line
2014-11-11 21:37:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-11 21:53:45 --- CRITICAL: Kohana_Exception [ 0 ]: The fecNac property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 21:53:45 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('fecNac')
#1 C:\xampp\htdocs\sab\application\views\user\create.php(96): Kohana_ORM->__get('fecNac')
#2 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\sab\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\sab\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\sab\application\classes\Controller\containers\default.php(158): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-11-11 22:20:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\user.php [ 111 ] in file:line
2014-11-11 22:20:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line