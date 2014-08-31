<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-30 23:02:44 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:02:44 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:06 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:06 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:51 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:51 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:52 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:52 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:53 --- CRITICAL: Exception_Unauthorized [ 0 ]:  ~ APPPATH\classes\Controller\containers\default.php [ 46 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:07:53 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(69): Controller_Containers_Default->before()
#1 [internal function]: Kohana_Controller->execute()
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#6 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php:69
2014-08-30 23:25:52 --- CRITICAL: Kohana_Exception [ 0 ]: The nombre property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:25:52 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nombre')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\generic.php(63): Kohana_ORM->__get('nombre')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Generic->action_autocompleterservicio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Generic))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:26:12 --- CRITICAL: Kohana_Exception [ 0 ]: The nombre property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:26:12 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nombre')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\generic.php(63): Kohana_ORM->__get('nombre')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Generic->action_autocompleterservicio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Generic))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:26:51 --- CRITICAL: Kohana_Exception [ 0 ]: The nombre property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:26:51 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nombre')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\generic.php(63): Kohana_ORM->__get('nombre')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Generic->action_autocompleterservicio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Generic))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:27:00 --- CRITICAL: Kohana_Exception [ 0 ]: The nombre property does not exist in the Model_Servicio class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:27:00 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nombre')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\generic.php(63): Kohana_ORM->__get('nombre')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Generic->action_autocompleterservicio()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Generic))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-08-30 23:33:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Exception::errors() ~ APPPATH\classes\Controller\Sla.php [ 44 ] in file:line
2014-08-30 23:33:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-30 23:36:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Exception::errors() ~ APPPATH\classes\Controller\Sla.php [ 44 ] in file:line
2014-08-30 23:36:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-30 23:39:04 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`sab`.`sla`, CONSTRAINT `fk_SLA_Servicio` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `sla` (`criticidad`, `responsable`, `tiempoRespuesta`, `medTiempo`, `descripcion`, `disponibilidad`) VALUES ('bajo', 'Yo', '45', 'm', 'asdasd', 45.000000) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-08-30 23:39:04 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\SAB\application\classes\Controller\Sla.php(36): Kohana_ORM->save()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Sla->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-08-30 23:42:56 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`sab`.`sla`, CONSTRAINT `fk_SLA_Servicio` FOREIGN KEY (`Servicio_idServicio`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION) [ INSERT INTO `sla` (`criticidad`, `responsable`, `tiempoRespuesta`, `medTiempo`, `descripcion`, `disponibilidad`) VALUES ('bajo', 'you', '78', 'm', 'asdsad;lk', 89.000000) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-08-30 23:42:56 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `sl...', false, Array)
#1 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\SAB\application\classes\Controller\Sla.php(36): Kohana_ORM->save()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Sla->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Sla))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251