<?php

function inputHas($key){
	return isset($_REQUEST[$key]);
}

function inputGet($key, $default = "")
{
	if(inputHas($key)){
		return $_REQUEST[$key];
	}
	else{
		return $default;
	}
}