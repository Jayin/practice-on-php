<?php

	$data = array(
		"website_title" =>"Template"
		,"title"        =>"Hellow world"
		,"content" 		=>"This is content"
	);

	extract($data);

	//此函数将打开输出缓冲。当输出缓冲激活后，脚本将不会输出内容（除http标头外），相反需要输出的内容被存储在内部缓冲区中
	//for more: us1.php.net/manual/zh/function.ob-start.php
	ob_start();
	
	require_once("simple.tpl");
	$output = ob_get_contents();
	echo "-->".$output."\n"; //所以这里只是输出到内部的缓冲区中,没有输出到流中

	ob_end_clean();

	if($output){
		echo "YES\n";
	}else{
		echo "NO\n";
	}
	echo "\n ---- \n";
	echo $output;

