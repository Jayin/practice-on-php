<?php

class A {
	private $name;
	private $age;

	private $data  = array();

	public function __construct(){
		$this->data['name'] = $this->name;
		$this->data['age']  = $this->age;
	}

	public function  __get($key){
		echo "__get-->".$key."!!!!! \n"; 
		 
		return $this->data[$key];
	}

	public function __set($key,$val){
		echo "__set-->".$key."!!!!! \n"; 

		$this-> data[$key] = $val;
	}
}



$a = new A();
$a->name = "abc";
$a->age  = 14;

var_dump($a);
echo "\n";
echo "name--> ".$a->name;
echo "age--> ".$a->age;
echo "\n";

//new one
$a->weight = 60;
$a->height = 170;
echo "weight--> ".$a->weight;
echo "height--> ".$a->height;
