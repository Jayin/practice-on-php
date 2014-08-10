<?php
ini_set ( "display_errors", 'on' );
error_reporting ( E_ALL );

require_once 'Session.php';

$session = new Session();


if ($session->clean()){
	echo "session_destroy ok";
} else {
	echo "session_destroy faild";
}

// echo session_cache_expire();
// echo session_cache_limiter();
