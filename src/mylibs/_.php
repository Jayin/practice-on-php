<?php

function d($msg) {
    if ($msg) {
        echo $msg . "<br>";
        return;
    }
    echo "<br>";
}

function dp($msg) {
    var_dump($msg);
    echo d("");
}

function dpf($msg) {
    //print_r() 显示关于一个变量的易于理解的信息。
    //如果给出的是 string、integer 或 float，将打印变量值本身。
   //如果给出的是 array，将会按照一定格式显示键和元素。object 与数组类似。
    print_r($msg);
    echo d("");
}


