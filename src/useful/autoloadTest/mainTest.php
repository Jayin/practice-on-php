<?php
//自动加载类

function autoLoader($class){
	echo "we are loading -->" . $class . "\n";
	if($class === 'Orange'){
		require_once "./moreFruit/" .strtolower($class) . ".php";
		return;
	}
	require_once strtolower($class) . ".php";

}

spl_autoload_register("autoLoader");
//注册并返回spl_autoload函数使用的默认文件扩展名,mostly is .php file
echo spl_autoload_extensions('.php');
new Apple();

new Orange();

