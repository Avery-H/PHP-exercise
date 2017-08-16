<?php

class Square extends Rectangle
{

	public function __construct($a){
		Parent::__construct($a,$a);
		$this->height = $a;
		$this->width = $a;
	}
	public function perimeter(){
		return ($this->height * 4);
	}
	public function area(){
		return ($this->height * $this->height);
	}
}