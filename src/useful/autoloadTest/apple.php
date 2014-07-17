<?php

class Apple extends Fruit{
	
	protected $name = "Apple";

	
	public function __construct(){
		echo "Apple::__construct". "\n";
	}
	
}