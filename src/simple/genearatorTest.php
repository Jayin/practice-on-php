<?php
//(PHP 5 >= 5.5.0)
//生成器提供了一种更容易的方法来实现简单的对象迭代，但没有实现一个具有 Iterator 接口的类所带来的性能开销和复杂性。
function fib($max) {
    $a = 1;
    $b = 1;
    for ($i = 1; $i <= $max; $i ++) {
        if ($i == 1 || $i == 2) {
            yield 1;
        } else {
            yield $a + $b;
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
    }
}

foreach (fib(10) as $a) {
    echo $a . '<br>';
}