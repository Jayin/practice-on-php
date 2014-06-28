<?php
require_once './namespaceTest1.php';
use simple\Person;

//方法要指定命名空间
simple\say();

echo constant('name') . "<br>";

$p = new Person("jayin"); //类就不用了
var_dump($p);

echo "<br>".simple\ID . "<br>";



 