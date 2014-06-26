<?php

class foo implements JsonSerializable {

    public $name;

    public $id;

    public $height = 180; // 不会序列化private
    public $weight = 120; // 不会序列化protected
    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }

    public function jsonSerialize() {
        $res = array(
                'name' => $this->name,
                'id' => $this->id,
                'height' => $this->height,
                'weight' => $this->weight
        );
        return $res; //要序列化的对象
    }
}

$f = new foo("Jayin", 1);
$str = json_encode($f, JSON_PRETTY_PRINT);
var_dump($str);
echo "<br>---<br>";

$obj = json_decode($str);
var_dump($obj);
