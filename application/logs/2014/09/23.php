<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-23 21:05:32 --- CRITICAL: Kohana_Exception [ 0 ]: The _frecuencia property does not exist in the Model_InformacionContacto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-09-23 21:05:32 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_frecuencia')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(85): Kohana_ORM->__get('_frecuencia')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_loadrespaldo()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-09-23 21:51:13 --- CRITICAL: Kohana_Exception [ 0 ]: The _frecuencia property does not exist in the Model_InformacionContacto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-09-23 21:51:13 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_frecuencia')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Servicio.php(85): Kohana_ORM->__get('_frecuencia')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Servicio->action_loadrespaldo()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Servicio))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603