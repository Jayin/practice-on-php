<?php
ini_set ( "display_errors", 'on' );
error_reporting ( E_ALL );

require_once 'Session.php';

$session = new Session();

echo "22";
if (isset ( $_SESSION ['id'] )) {
	echo $_SESSION ['name'];
	echo $_SESSION ['id'];
}
// create

echo "session_start ok!";
echo '<br /><a href="info.php">page 2</a>';
$_SESSION ['name'] = 'Jayin';
$_SESSION ['id'] = '1231231231';

