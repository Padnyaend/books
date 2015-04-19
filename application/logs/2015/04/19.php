<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-19 03:44:47 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Member.php [ 12 ] in Z:\home\localhost\www\Books\application\classes\Controller\Member.php:12
2015-04-19 03:44:47 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\localho...', 12, Array)
#1 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\www\Books\application\classes\Controller\Member.php:12
2015-04-19 03:45:11 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Member.php [ 11 ] in Z:\home\localhost\www\Books\application\classes\Controller\Member.php:11
2015-04-19 03:45:11 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(11): Kohana_Core::error_handler(2048, 'Creating defaul...', 'Z:\home\localho...', 11, Array)
#1 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\localhost\www\Books\application\classes\Controller\Member.php:11
2015-04-19 09:14:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Listbooks::$_db ~ APPPATH\classes\Model\Listbooks.php [ 19 ] in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:19
2015-04-19 09:14:43 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#2 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:19
2015-04-19 09:16:46 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Listbooks::$db ~ APPPATH\classes\Model\Listbooks.php [ 19 ] in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:19
2015-04-19 09:16:46 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 19, Array)
#1 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#2 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:19
2015-04-19 09:39:27 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Listbooks::$db ~ APPPATH\classes\Model\Listbooks.php [ 18 ] in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:18
2015-04-19 09:39:27 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#2 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:18
2015-04-19 09:39:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Listbooks::$_db ~ APPPATH\classes\Model\Listbooks.php [ 18 ] in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:18
2015-04-19 09:39:37 --- DEBUG: #0 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\localho...', 18, Array)
#1 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#2 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php:18
2015-04-19 09:45:52 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-19 09:45:52 --- DEBUG: #0 Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT b.name,?...', false, Array)
#2 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(21): Kohana_Database_Query->execute()
#3 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#7 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-19 09:47:55 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'admin'@'localhost' (using password: YES) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-19 09:47:55 --- DEBUG: #0 Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT b.name,?...', false, Array)
#2 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(20): Kohana_Database_Query->execute()
#3 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#4 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#7 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\MySQL.php:171
2015-04-19 09:52:38 --- CRITICAL: Database_Exception [ 1146 ]: Table 'books.authors_books' doesn't exist [ SELECT b.name,
       a.name
FROM   `authors` a,
       `books` b,
       `authors_books` s
WHERE  s.book_id = b.id
  AND  s.author_id = a.id
ORDER BY b.name ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\Query.php:251
2015-04-19 09:52:38 --- DEBUG: #0 Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT b.name,?...', false, Array)
#1 Z:\home\localhost\www\Books\application\classes\Model\Listbooks.php(20): Kohana_Database_Query->execute()
#2 Z:\home\localhost\www\Books\application\classes\Controller\Member.php(21): Model_Listbooks->getBooks()
#3 Z:\home\localhost\www\Books\system\classes\Kohana\Controller.php(84): Controller_Member->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Member))
#6 Z:\home\localhost\www\Books\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\localhost\www\Books\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\localhost\www\Books\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\localhost\www\Books\modules\database\classes\Kohana\Database\Query.php:251
2015-04-19 11:30:48 --- CRITICAL: ErrorException [ 1 ]: Class 'classes_Model_Listbooks' not found ~ APPPATH\views\frame.php [ 37 ] in file:line
2015-04-19 11:30:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-19 11:31:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Classes_Model_Listbooks' not found ~ APPPATH\views\frame.php [ 37 ] in file:line
2015-04-19 11:31:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line