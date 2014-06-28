<?php
/**
 * 只有三种类型的代码受命名空间的影响，它们是：类，函数和常量。
 */
namespace simple;

define('name', 'Jack');
const ID = 1;

function say() {
    echo "hello<br>";
}

class Person {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}
