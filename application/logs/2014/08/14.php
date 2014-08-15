<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-14 22:27:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: nombre ~ APPPATH\classes\Controller\Ola.php [ 66 ] in C:\xampp\htdocs\sab\application\classes\Controller\Ola.php:66
2014-08-14 22:27:31 --- DEBUG: #0 C:\xampp\htdocs\sab\application\classes\Controller\Ola.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 66, Array)
#1 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Ola->action_loadola()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ola))
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\sab\application\classes\Controller\Ola.php:66
2014-08-14 22:30:19 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tiempoCriticidad' in 'where clause' [ SELECT `ola`.`id` AS `id`, `ola`.`criticidad` AS `criticidad`, `ola`.`tiempoRespuesta` AS `tiempoRespuesta`, `ola`.`descripcion` AS `descripcion`, `ola`.`ServicioProveedor_idServicioProveedor` AS `ServicioProveedor_idServicioProveedor` FROM `ola` AS `ola` WHERE LOWER(criticidad) LIKE _utf8 '%%' collate utf8_bin AND LOWER(tiempoCriticidad) LIKE _utf8 '%%' collate utf8_bin ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\Query.php:251
2014-08-14 22:30:19 --- DEBUG: #0 C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `ola`.`i...', 'Model_Ola', Array)
#1 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\sab\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\sab\application\classes\Controller\Ola.php(73): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\sab\system\classes\Kohana\Controller.php(84): Controller_Ola->action_loadola()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ola))
#7 C:\xampp\htdocs\sab\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\sab\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\sab\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\sab\modules\database\classes\Kohana\Database\Query.php:251