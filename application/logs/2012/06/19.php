<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-19 20:31:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-19 20:31:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 20:32:15 --- ERROR: View_Exception [ 0 ]: The requested view hello/world could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 20:32:15 --- STRACE: View_Exception [ 0 ]: The requested view hello/world could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('hello/world')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('hello/world', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Kohana_View::factory('hello/world')
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:36:09 --- ERROR: ErrorException [ 1 ]: Call to undefined function getTags() ~ APPPATH\classes\controller\create.php [ 8 ]
2012-06-19 20:36:09 --- STRACE: ErrorException [ 1 ]: Call to undefined function getTags() ~ APPPATH\classes\controller\create.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:22 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:22 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:55 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:55 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:56 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:56 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:56 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:56 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:56 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:56 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:57 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:57 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:58 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:58 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:36:58 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:36:58 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:37:09 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:37:09 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:37:10 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:37:10 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:37:10 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:37:10 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:37:10 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:37:10 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:38:18 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
2012-06-19 20:38:18 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\create.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 20:40:15 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:40:15 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT username...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:40:59 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:40:59 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT * FROM t...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:41:12 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:41:12 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT * FROM t...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:41:14 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:41:14 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT * FROM t...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:41:14 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:41:14 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT * FROM t...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:41:14 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:41:14 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT * FROM t...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:43:25 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\create.php [ 17 ]
2012-06-19 20:43:25 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\controller\create.php [ 17 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(17): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\wamp\www\img...', 17, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#2 [internal function]: Controller_Create->action_new()
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-19 20:46:13 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
2012-06-19 20:46:13 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Kohana_Database_MySQL::query(), called in D:\wamp\www\imgtag\application\classes\controller\create.php on line 15 and defined ~ MODPATH\database\classes\kohana\database\mysql.php [ 168 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\mysql.php(168): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\wamp\www\img...', 168, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(15): Kohana_Database_MySQL->query('SELECT tagDesc ...')
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 20:49:51 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\create.php [ 21 ]
2012-06-19 20:49:51 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\create.php [ 21 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\img...', 21, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#2 [internal function]: Controller_Create->action_new()
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-19 20:50:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\create.php [ 21 ]
2012-06-19 20:50:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\create.php [ 21 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'D:\wamp\www\img...', 21, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(8): Controller_Create->getTags()
#2 [internal function]: Controller_Create->action_new()
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#7 {main}
2012-06-19 21:16:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH\classes\controller\create.php [ 8 ]
2012-06-19 21:16:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method URL::current() ~ APPPATH\classes\controller\create.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:20:04 --- ERROR: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 21:20:04 --- STRACE: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/upload')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/upload', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(25): Kohana_View::factory('create/upload')
#3 [internal function]: Controller_Create->action_upload()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 21:20:26 --- ERROR: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 21:20:26 --- STRACE: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/upload')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/upload', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(25): Kohana_View::factory('create/upload')
#3 [internal function]: Controller_Create->action_upload()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 21:31:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\create.php [ 17 ]
2012-06-19 21:31:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\create.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:31:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\create.php [ 19 ]
2012-06-19 21:31:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\create.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:31:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\create.php [ 19 ]
2012-06-19 21:31:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\controller\create.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:32:06 --- ERROR: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `tags` (`Another tag`) VALUES ('sampleA', 'SampleB') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-19 21:32:06 --- STRACE: Database_Exception [ 1136 ]: Column count doesn't match value count at row 1 [ INSERT INTO `tags` (`Another tag`) VALUES ('sampleA', 'SampleB') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(9): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 21:32:19 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'Another tag' in 'field list' [ INSERT INTO `tags` (`Another tag`) VALUES ('SampleB') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-06-19 21:32:19 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'Another tag' in 'field list' [ INSERT INTO `tags` (`Another tag`) VALUES ('SampleB') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\wamp\www\imgtag\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 D:\wamp\www\imgtag\application\classes\controller\create.php(19): Kohana_Database_Query->execute()
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(9): Controller_Create->getTags()
#3 [internal function]: Controller_Create->action_new()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 21:36:40 --- ERROR: View_Exception [ 0 ]: The requested view create/tags could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 21:36:40 --- STRACE: View_Exception [ 0 ]: The requested view create/tags could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/tags')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/tags', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(28): Kohana_View::factory('create/tags')
#3 [internal function]: Controller_Create->action_upload()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 21:37:52 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
2012-06-19 21:37:52 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:38:20 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
2012-06-19 21:38:20 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:39:04 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
2012-06-19 21:39:04 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 48 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:39:47 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 51 ]
2012-06-19 21:39:47 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:40:00 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 51 ]
2012-06-19 21:40:00 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:40:23 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 52 ]
2012-06-19 21:40:23 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\controller\create.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:47:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:47:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:47:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:47:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:47:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:47:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:47:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:47:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 21:57:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-19 21:57:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 21:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-19 21:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 21:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-19 21:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL create/tags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 21:59:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:59:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 D:\wamp\www\imgtag\application\views\Create\tags.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\img...', 8, Array)
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(61): include('D:\wamp\www\img...')
#2 D:\wamp\www\imgtag\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\img...', Array)
#3 D:\wamp\www\imgtag\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\imgtag\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\imgtag\application\classes\controller\create.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Create->action_tags()
#7 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#8 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-19 21:59:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 21:59:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 D:\wamp\www\imgtag\application\views\Create\tags.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\img...', 8, Array)
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(61): include('D:\wamp\www\img...')
#2 D:\wamp\www\imgtag\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\img...', Array)
#3 D:\wamp\www\imgtag\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\imgtag\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\imgtag\application\classes\controller\create.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Create->action_tags()
#7 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#8 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-19 22:00:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
2012-06-19 22:00:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 8 ]
--
#0 D:\wamp\www\imgtag\application\views\Create\tags.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\img...', 8, Array)
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(61): include('D:\wamp\www\img...')
#2 D:\wamp\www\imgtag\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\img...', Array)
#3 D:\wamp\www\imgtag\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\imgtag\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\imgtag\application\classes\controller\create.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Create->action_tags()
#7 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#8 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-19 22:01:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 12 ]
2012-06-19 22:01:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH\views\Create\tags.php [ 12 ]
--
#0 D:\wamp\www\imgtag\application\views\Create\tags.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\wamp\www\img...', 12, Array)
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(61): include('D:\wamp\www\img...')
#2 D:\wamp\www\imgtag\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\img...', Array)
#3 D:\wamp\www\imgtag\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\imgtag\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\imgtag\application\classes\controller\create.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Create->action_tags()
#7 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#8 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-19 22:03:05 --- ERROR: ErrorException [ 8 ]: Undefined index: nm ~ APPPATH\views\Create\tags.php [ 9 ]
2012-06-19 22:03:05 --- STRACE: ErrorException [ 8 ]: Undefined index: nm ~ APPPATH\views\Create\tags.php [ 9 ]
--
#0 D:\wamp\www\imgtag\application\views\Create\tags.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 9, Array)
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(61): include('D:\wamp\www\img...')
#2 D:\wamp\www\imgtag\system\classes\kohana\view.php(343): Kohana_View::capture('D:\wamp\www\img...', Array)
#3 D:\wamp\www\imgtag\system\classes\kohana\view.php(228): Kohana_View->render()
#4 D:\wamp\www\imgtag\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 D:\wamp\www\imgtag\application\classes\controller\create.php(59): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Create->action_upload()
#7 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#8 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#11 {main}
2012-06-19 22:05:01 --- ERROR: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 22:05:01 --- STRACE: View_Exception [ 0 ]: The requested view create/upload could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/upload')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/upload', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(32): Kohana_View::factory('create/upload')
#3 [internal function]: Controller_Create->action_upload()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 22:18:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\create.php [ 16 ]
2012-06-19 22:18:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\classes\controller\create.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 23:04:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL create/saveTags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-06-19 23:04:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL create/saveTags was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#3 {main}
2012-06-19 23:16:46 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 24 ]
2012-06-19 23:16:46 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 24 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 24, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:17:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
2012-06-19 23:17:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 23:17:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
2012-06-19 23:17:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 23:17:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
2012-06-19 23:17:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\controller\create.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 23:17:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\create.php [ 27 ]
2012-06-19 23:17:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\create.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-19 23:18:07 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 25 ]
2012-06-19 23:18:07 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 25 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 25, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:19:23 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
2012-06-19 23:19:23 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 28, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:19:45 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
2012-06-19 23:19:45 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 28, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:20:15 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
2012-06-19 23:20:15 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 28 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 28, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:28:11 --- ERROR: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 31 ]
2012-06-19 23:28:11 --- STRACE: ErrorException [ 8 ]: Undefined index: imgFileNm ~ APPPATH\classes\controller\create.php [ 31 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(31): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 31, Array)
#1 [internal function]: Controller_Create->action_tags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-19 23:29:20 --- ERROR: View_Exception [ 0 ]: The requested view create/tags/?nmpszdblvwgq6faf5o38mo.jpg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 23:29:20 --- STRACE: View_Exception [ 0 ]: The requested view create/tags/?nmpszdblvwgq6faf5o38mo.jpg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/tags/?nm...')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/tags/?nm...', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(31): Kohana_View::factory('create/tags/?nm...')
#3 [internal function]: Controller_Create->action_tags()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 23:29:58 --- ERROR: View_Exception [ 0 ]: The requested view create/tags/?nm=pszdblvwgq6faf5o38mo.jpg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-06-19 23:29:58 --- STRACE: View_Exception [ 0 ]: The requested view create/tags/?nm=pszdblvwgq6faf5o38mo.jpg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 D:\wamp\www\imgtag\system\classes\kohana\view.php(137): Kohana_View->set_filename('create/tags/?nm...')
#1 D:\wamp\www\imgtag\system\classes\kohana\view.php(30): Kohana_View->__construct('create/tags/?nm...', NULL)
#2 D:\wamp\www\imgtag\application\classes\controller\create.php(31): Kohana_View::factory('create/tags/?nm...')
#3 [internal function]: Controller_Create->action_tags()
#4 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#5 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#8 {main}
2012-06-19 23:39:56 --- ERROR: ErrorException [ 8 ]: Undefined index: nameOfSelect ~ APPPATH\classes\controller\create.php [ 34 ]
2012-06-19 23:39:56 --- STRACE: ErrorException [ 8 ]: Undefined index: nameOfSelect ~ APPPATH\classes\controller\create.php [ 34 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\wamp\www\img...', 34, Array)
#1 [internal function]: Controller_Create->action_savetags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}