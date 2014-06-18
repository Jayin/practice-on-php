<?php

require_once '../mylibs/_.php';

$f = function ($word){

	foreach ($word as $w){
		d("-->".$w);
	}
	return "LOL";
};

 
$r = preg_replace("({\s*\w+\s})i", "g", "{ name }");

d($r);

$r = preg_replace_callback("({\s*\w+\s})i", $f, "I was so { name }",1);

d($r);