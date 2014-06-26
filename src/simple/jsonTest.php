<?php
// NOTE:
// 1.string json_encode ( mixed $value [, int $options = 0 ] )
// --> $options = JSON_PRETTY_PRINT 让json更加容易读
// 2.json_encode($obj) 不会生成非public字段的属性(jsonTest1.php会解决这个问题)
class foo {

    public $name;

    public $id;

    public $height = 180; // 不会序列化private
    public $weight = 120; // 不会序列化protected
    
    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }
}

$f = new foo("Jayin", 1);
$str = json_encode($f, JSON_PRETTY_PRINT);
var_dump($str);
echo "<br>---<br>";

$obj = json_decode($str);
var_dump($obj);