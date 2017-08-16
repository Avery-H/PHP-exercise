<?php


class Rectangle 
{
	protected $height;
	protected $width;

	public function __construct($a,$b){
		$this->height = $a;
		$this->width = $b;

	}

	public function area(){
		return ($this->height * $this->width);
	}

	public function perimeter(){
		return (($this->height * 2) + ($this->width * 2));
	}
}