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

new Apple();

new Orange();