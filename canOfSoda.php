<?php
class Sodana{
	public $brandName;
	public $isFull = true;
	public $isOpen = false;
	public $expirationDate;



	public function openSoda(){
		if(!$this->isOpen){
			$this->isOpen = true;
		}
	}
	public function pourOut(){
		if($this->isOpen&&$this->isFull){
			$this->isFull = false;
	}
}