<?php 
require_once '../mylibs/_.php';

$password = "11223344";
$hash_string1 = password_hash($password, PASSWORD_DEFAULT);
echo $hash_string1."<br>";

//check.. 验证
if(password_verify($password, $hash_string1)){
    echo "---->string 1 is right"."<br>";
}else{
    echo "string 1 is not right"."<br>";
}

//get the info of the hash alog and option,获取其hash算法
dp(password_get_info($hash_string1)) ;

$hash_string3 = password_hash($password, PASSWORD_DEFAULT);
echo $hash_string3."<br>";

if(password_verify($password, $hash_string3)){
    echo "--->string 3 is right"."<br>";
}else{
    echo "string 3 is not right"."<br>";
}

$hash_string2 = password_hash($password, PASSWORD_BCRYPT);
echo $hash_string2."<br>";

//check if $hash_string need to rehash
if(password_needs_rehash($hash_string3, PASSWORD_BCRYPT)){
   d("need to rehash");
}else{
    d("not need to rehash");
}






