<?php
//对象序列化
class foo  {

    public $name;

    public $id;

    public function __construct($name, $id) {
        $this->id = $id;
        $this->name = $name;
    }
}

$obj1 = new foo("Jayin", 1);
$obj2 = new foo("Cam", 2);

var_dump($obj1);
var_dump($obj2);

$str1 = serialize($obj1);
$str2 = serialize($obj2);

var_dump($str1);
var_dump($str2);

$obj3 = unserialize($str1);
$obj4 = unserialize($str2);

var_dump($obj3);
var_dump($obj4);
