<?php
//more function reference:http://cn2.php.net/manual/zh/book.array.php

     $a1 = array(1,2,3 );
     $a2 = array(2,3,4,5);

     echo "\n";
     //计算数组的差集
     var_dump(array_diff($a1, $a2));

     echo "\n";
     // 合并一个或多个数组
     var_dump(array_merge($a1,$a2));

     echo "\n";
     //fillter~
     var_dump(array_filter($a2,function($val){
        if($val %2 == 0 ){
            return true;
        }
        return false;
     }));

     echo "\n";
     //map also
     var_dump(array_map(function($val){
        return $val * $val;
     }, $a2));

     //移除最左边的第一个
     echo "\n";
     var_dump(array_shift($a1));

    //按顺序加入到数组
    $t1 = array();
    $t1[] = 1;
    $t1[] = 2;
    var_dump($t1);

    // 从数组中将变量导入到当前的符号表
    $size = "large";
    $var_array = array("color" => "blue",
                       "size"  => "medium",
                       "shape" => "sphere");
    extract($var_array, EXTR_OVERWRITE);
    echo $color . "\n";
    echo $size . "\n";
    echo $shape . "\n";



