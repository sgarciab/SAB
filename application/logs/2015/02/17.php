<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-17 19:56:45 --- CRITICAL: Mailgun\Connection\Exceptions\MissingRequiredParameters [ 0 ]: The parameters passed to the API were invalid. Check your inputs! ~ MODPATH\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Connection\RestClient.php [ 127 ] in C:\xampp\htdocs\SAB\modules\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Connection\RestClient.php:90
2015-02-17 19:56:45 --- DEBUG: #0 C:\xampp\htdocs\SAB\modules\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Connection\RestClient.php(90): Mailgun\Connection\RestClient->responseHandler(Object(Guzzle\Http\Message\Response))
#1 C:\xampp\htdocs\SAB\modules\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Mailgun.php(80): Mailgun\Connection\RestClient->post('sandbox451fc617...', Array, Array)
#2 C:\xampp\htdocs\SAB\modules\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Mailgun.php(36): Mailgun\Mailgun->post('sandbox451fc617...', Array, Array)
#3 C:\xampp\htdocs\SAB\application\classes\Controller\main.php(27): Mailgun\Mailgun->sendMessage('sandbox451fc617...', Array)
#4 C:\xampp\htdocs\SAB\system\classes\Kohana\Controller.php(84): Controller_Main->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 C:\xampp\htdocs\SAB\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\SAB\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\SAB\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\SAB\modules\mailgun-php\vendor\mailgun\mailgun-php\src\Mailgun\Connection\RestClient.php:90