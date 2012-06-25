<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-21 00:18:03 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\create.php [ 44 ]
2012-06-21 00:18:03 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\create.php [ 44 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\wamp\www\img...', 44, Array)
#1 [internal function]: Controller_Create->action_savetags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}
2012-06-21 00:18:09 --- ERROR: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\create.php [ 44 ]
2012-06-21 00:18:09 --- STRACE: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\controller\create.php [ 44 ]
--
#0 D:\wamp\www\imgtag\application\classes\controller\create.php(44): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\wamp\www\img...', 44, Array)
#1 [internal function]: Controller_Create->action_savetags()
#2 D:\wamp\www\imgtag\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Create))
#3 D:\wamp\www\imgtag\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 D:\wamp\www\imgtag\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 D:\wamp\www\imgtag\index.php(109): Kohana_Request->execute()
#6 {main}