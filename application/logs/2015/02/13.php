<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-13 09:23:09 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect():  ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\MySQL.php:171
2015-02-13 09:23:09 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuario')
#3 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 C:\xampp\htdocs\SAB\application\classes\Model\user.php(44): Kohana_ORM::factory('User')
#8 C:\xampp\htdocs\SAB\application\classes\Controller\login.php(28): Model_User::authenticate('admin', 'abc123')
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Login->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Login))
#12 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\SAB\modules\database\classes\Kohana\Database\MySQL.php:171