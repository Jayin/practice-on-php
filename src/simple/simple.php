<?php

require_once '../mylibs/_.php';

$a = 1;
$b = 2;
dp ( $a + $b );

// 唯一的连接字符串的
$str1 = "abc";
$str2 = "ecf";
$str3 = $str1 . $str2;
d ( $str3 );

// if elseif else..
if ($str1 == $str2) {
	d ( "\$str1 == \$str2" );
} elseif ($str1 == "abc") {
	d ( "else if -->" . $str1 );
} else {
	d ( "else" );
}

// switch
$n = "dog";
switch ($n) {
	case "a" :
		d ( "switch a" );
		break;
	case "dog" :
		d ( "switch dog" );
		break;
	default :
		d ( "switch default" );
}

// array
$a = array (
		2,
		3,
		4,
		5,
		6 
);
dp ( $a );
d ( count ( $a ) );

// map
$age = array (
		"Peter" => "35",
		"Ben" => "37",
		"Joe" => "43" 
);
// or:
$age ['Peter'] = "35";
$age ['Ben'] = "37";
$age ['Joe'] = "43";
dp ( $age );

// foreach
foreach ( $age as $a ) {
	d ( $a );
	// just get the value not the key =,=
}
// 2
$arr = array(
        "Jayin" => 1,
        1,
        3
);
foreach ($arr as $key => $val){
    d($key." -> ".$val);
}


