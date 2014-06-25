<?php
// Note: 自 PHP 5 起，默认值可以通过引用传递。
//
function foo() {
    var_dump(func_get_args());
    echo '<br>';
    echo 'num ' . func_num_args();
    echo '<br>';
    echo 'arg in 1 is ' . func_get_arg(1);
    echo '<br>';
}
foo(1, 34, 5);

// 默认参数,注意，默认参数智能放在没有默认参数的后面，不然解析错误
function foo1($name, $msg = "default msg") {
    if ($name) {
        var_dump($name);
        echo '<br>';
    }
    var_dump($msg);
    echo '<br>';
}

foo1(null);



