<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-19 14:17:02 --- CRITICAL: Kohana_Exception [ 0 ]: The firstname property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php:603
2014-10-19 14:17:02 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firstname')
#1 C:\xampp\htdocs\sab\application\views\user\index.php(28): Kohana_ORM->__get('firstname')
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