<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-24 22:45:40 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'telefono' in 'where clause' [ SELECT `proveedor`.`id` AS `id`, `proveedor`.`nombre` AS `nombre`, `proveedor`.`RUC` AS `RUC`, `proveedor`.`direccion` AS `direccion`, `proveedor`.`telefono1` AS `telefono1`, `proveedor`.`telefono2` AS `telefono2`, `proveedor`.`movil1` AS `movil1`, `proveedor`.`movil2` AS `movil2` FROM `proveedor` AS `proveedor` WHERE LOWER(nombre) LIKE _utf8 '%%' collate utf8_bin AND LOWER(ruc) LIKE _utf8 '%%' collate utf8_bin AND LOWER(telefono) LIKE _utf8 '%%' collate utf8_bin ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-24 22:45:40 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `proveed...', 'Model_Proveedor', Array)
#1 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\SAB\application\classes\Controller\Proveedor.php(69): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\Query.php:251
2014-07-24 22:47:18 --- CRITICAL: View_Exception [ 0 ]: The requested view proveedor/loads/loadproveedore could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-24 22:47:18 --- DEBUG: #0 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(137): Kohana_View->set_filename('proveedor/loads...')
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(30): Kohana_View->__construct('proveedor/loads...', NULL)
#2 C:\xampp\htdocs\SAB\application\classes\Controller\Proveedor.php(71): Kohana_View::factory('proveedor/loads...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_loadproveedores()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\SAB\system\classes\Kohana\View.php:137
2014-07-24 22:53:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ruc ~ APPPATH\classes\Controller\Proveedor.php [ 26 ] in C:\xampp\htdocs\SAB\application\classes\Controller\Proveedor.php:26
2014-07-24 22:53:42 --- DEBUG: #0 C:\xampp\htdocs\SAB\application\classes\Controller\Proveedor.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\\xampp\\htdocs...', 26, Array)
#1 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Proveedor->action_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\SAB\application\classes\Controller\Proveedor.php:26
2014-07-24 22:55:12 --- CRITICAL: Kohana_Exception [ 0 ]: The ruc property does not exist in the Model_Proveedor class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2014-07-24 22:55:12 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('ruc')
#1 C:\xampp\htdocs\SAB\application\views\proveedor\create.php(39): Kohana_ORM->__get('ruc')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\SAB\application\views\containers\default.php(75): Kohana_View->__toString()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\SAB\application\classes\Controller\containers\default.php(160): Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(87): Controller_Containers_Default->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Proveedor))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603