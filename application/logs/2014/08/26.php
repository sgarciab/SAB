<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-26 16:07:42 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-26 16:07:42 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69