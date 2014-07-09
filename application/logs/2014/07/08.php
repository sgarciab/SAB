<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-08 20:40:44 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_usuario' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-08 20:40:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 20:41:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Model_User' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-08 20:41:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 20:47:39 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:47:39 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\SAB\application\classes\Model\user.php(55): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(28): Model_User::authenticate('admin', 'admin')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:49:03 --- CRITICAL: Kohana_Exception [ 0 ]: The status property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:49:03 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('status')
#1 C:\xampp\htdocs\SAB\application\classes\Model\user.php(52): Kohana_ORM->__get('status')
#2 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(28): Model_User::authenticate('admin', 'admin')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:54:38 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:54:38 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id')
#1 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(30): Kohana_ORM->__get('id')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-08 20:55:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'where clause' [ SELECT `user`.`idUsuario` AS `idUsuario`, `user`.`nickname` AS `nickname`, `user`.`nombre` AS `nombre`, `user`.`apellido` AS `apellido`, `user`.`cedula` AS `cedula`, `user`.`telefono` AS `telefono`, `user`.`email` AS `email`, `user`.`fechaNacimiento` AS `fechaNacimiento`, `user`.`profile_id` AS `profile_id`, `user`.`password` AS `password`, `user`.`status` AS `status` FROM `usuario` AS `user` WHERE `user`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-08 20:55:35 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\SAB\application\classes\Controller\containers\login.php(145): Kohana_ORM::factory('User', '1')
#6 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(30): Controller_Containers_Login->login('1')
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-08 20:59:44 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'where clause' [ SELECT `user`.`idUsuario` AS `idUsuario`, `user`.`nickname` AS `nickname`, `user`.`nombre` AS `nombre`, `user`.`apellido` AS `apellido`, `user`.`cedula` AS `cedula`, `user`.`telefono` AS `telefono`, `user`.`email` AS `email`, `user`.`fechaNacimiento` AS `fechaNacimiento`, `user`.`profile_id` AS `profile_id`, `user`.`password` AS `password`, `user`.`status` AS `status` FROM `usuario` AS `user` WHERE `user`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-08 20:59:44 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', false, Array)
#1 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('1')
#5 C:\xampp\htdocs\SAB\application\classes\Controller\containers\login.php(145): Kohana_ORM::factory('User', '1')
#6 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(30): Controller_Containers_Login->login('1')
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-08 21:16:35 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\login.php [ 32 ] in file:line
2014-07-08 21:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 21:17:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\login.php [ 21 ] in file:line
2014-07-08 21:17:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-07-08 21:18:53 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Allowedactions' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2014-07-08 21:18:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line