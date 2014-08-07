<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-06 21:50:42 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 21:50:42 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(134): Kohana_ORM->__construct('6')
#7 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(33): Controller_Containers_Login->initializeSession()
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(69): Controller_Containers_Login->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 21:53:41 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 21:53:41 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(134): Kohana_ORM->__construct('6')
#7 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(33): Controller_Containers_Login->initializeSession()
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(69): Controller_Containers_Login->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 21:53:44 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'root'@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 21:53:44 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(134): Kohana_ORM->__construct('6')
#7 C:\xampp\htdocs\sab\application\classes\Controller\containers\login.php(33): Controller_Containers_Login->initializeSession()
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(69): Controller_Containers_Login->before()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#11 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\MySQL.php:171
2014-08-06 22:20:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:41 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:43 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:43 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:49 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:51 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:51 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:55 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:55 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:56 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:56 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 63 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:20:57 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 63, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:63
2014-08-06 22:58:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:35 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:37 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:37 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:38 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 22:58:39 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:44 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:45 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:46 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:46 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:02:51 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:03:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Proveedor.php [ 82 ] in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82
2014-08-06 23:03:21 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 82, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Proveedor.php:82