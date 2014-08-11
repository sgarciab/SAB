<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-10 22:37:43 --- CRITICAL: Kohana_Exception [ 0 ]: The proveedor_id property does not exist in the Model_InformacionContacto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:702
2014-08-10 22:37:43 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('proveedor_id', 2)
#1 C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php(110): Kohana_ORM->__set('proveedor_id', 2)
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Cliente->action_createcontacto()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:702
2014-08-10 22:39:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: infoProveedor ~ APPPATH\classes\Controller\Cliente.php [ 113 ] in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:113
2014-08-10 22:39:54 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php(113): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 113, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Cliente->action_createcontacto()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Cliente))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\SAB\application\classes\Controller\Cliente.php:113