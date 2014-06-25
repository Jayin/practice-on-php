<?php
// 匿名函数/闭包Closure,since 5.3

// 匿名函数
$foo = function ($name, $msg = "default msg") {
    if ($name) {
        var_dump($name);
        echo '<br>';
    }
    var_dump($msg);
    echo '<br>';
};
$foo("Jayin");

// 闭包
$foo1 = function ($name) {
    echo "in function";
    echo "<br>";
    //NOTE:1.加个&就是引用传递，不然就是值复制，
    //     2.不用use关键字就不能使用所在的代码块中的上下文变量
    $ff = function () use (&$name) {
        var_dump($name);
        echo "!!!!<br>";
        $name =$name." LOL!";
    };
    $ff();
    var_dump($name);
    echo "!!!!<br>";
};

$foo1("Github");
