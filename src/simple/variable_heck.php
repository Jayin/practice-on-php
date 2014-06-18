<?php
// isset()判断变量是否被初始化
// 说明：它并不会判断变量是否为空，并且可以用来判断数组中元素是否被定义过
//
// empty功能：检测变量是否为"空"
// 说明：任何一个未初始化的变量、值为 0 或 false 或 空字符串"" 或 null的变量、空数组、没有任何属性的对象，都将判断为empty==true
//
// is_null功能：检测变量是否为"null"
// 	说明：当变量被赋值为"null"时，检测结果为true
// 	注意1：null不区分大小写：$a = null; $a = NULL 没有任何区别
// 	注意2：仅在变量的值为"null"时，检测结果才为true，0、空字符串、false、空数组都检测为false
//  注意3：变量未初始化时，程序将会报错

if (is_null($a)){
	echo "is null";
}else {
	echo "not null";
}
echo "<br>";


if (isset ( $a )) {
	echo "defined!";
} else {
	echo " defined!";
}

echo "<br>";

$a = array();
if (empty( $a )) {
	echo "it's empty!";
} else {
	echo "not empty!!";
}

echo "<br>";

