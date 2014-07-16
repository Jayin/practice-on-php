<?php

$data = array(
	"website_title" =>"Template"
	,"title"        =>"Hellow world"
	,"content" 		=>"This is content"
);

extract($data);

require_once("simple.tpl");

$output = ob_get_contents();
echo $output;

