<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-10 07:48:35 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-10 07:48:35 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\SAB\application\classes\Model\user.php(50): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(28): Model_User::authenticate('admin', '123456')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-10 07:51:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Allowedactions' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-10 07:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-10 07:53:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Exception_Unauthorized' not found ~ APPPATH\classes\Controller\containers\default.php [ 54 ] in file:line
2014-07-10 07:53:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-10 07:54:35 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 54 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-07-10 07:54:35 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-07-10 07:55:46 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 54 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-07-10 07:55:46 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-07-10 08:09:20 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-10 08:09:20 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 C:\xampp\htdocs\SAB\application\views\containers\default.php(54): Kohana_ORM->__get('firstname')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(160): Kohana_Controller_Template->after()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-10 08:12:02 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\login.php [ 42 ] in file:line
2014-07-10 08:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line