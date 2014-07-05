<?php
require_once '../mylibs/_.php';
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "test";
$port = 3307;
$socket = null;
#connect ,on this oop way
$mysqli = new mysqli($host, $user, $password, $database, $port, $socket);

if($mysqli->connect_errno){
    d("connect error");
    dpf($mysqli->connect_error);
}

// dpf($mysqli);
