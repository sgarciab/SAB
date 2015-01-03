
2015-01-03 15:53:05 --- CRITICAL: Kohana_Exception [ 0 ]: The Nombre property does not exist in the Model_Bug class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603
2015-01-03 15:53:05 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Nombre')
#1 C:\xampp\htdocs\SAB\application\views\controller\loads\bugs.php(14): Kohana_ORM->__get('Nombre')
#2 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(61): include('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\SAB\application\classes\Controller\main.php(86): Kohana_View->__toString()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Main->action_loadbugs()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#9 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\SAB\modules\orm\classes\Kohana\ORM.php:603