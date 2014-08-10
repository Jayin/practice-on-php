<?php

ini_set ( "display_errors", 'on' );
error_reporting ( E_ALL );

require_once 'Session.php';
echo session_cache_expire();echo"LO";
$session = new Session();
//session_id 靠session id 来控制是否登录，显然是不可靠，要自己控制例如isset($_SESSION ['id'])

if (session_id ()) {
	if(isset($_SESSION ['id'])){
		echo $_SESSION ['name'];
		echo $_SESSION ['id'];
	}else{
		echo "still not login";
	}
	
} else {
	session_start();
	echo 'not login in yet';
}
    