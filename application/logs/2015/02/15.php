<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-15 15:31:12 --- CRITICAL: Kohana_Exception [ 0 ]: The statusoptions property does not exist in the Model_Buglogs class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 15:31:12 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('statusoptions')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\main.php(112): Kohana_ORM->__get('statusoptions')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2015-02-15 15:33:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bugstatus ~ APPPATH\views\controller\main.php [ 79 ] in C:\xampp\htdocs\SAB\application\views\controller\main.php:79
2015-02-15 15:33:42 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\views\controller\main.php(79): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 79, Array)
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
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\SAB\application\views\controller\main.php:79