<?php

function isEven($var){
	if(($var % 2) == 0){
		return true;
	}
	return false;
}

function isVowel($var){
	$var = strtolower($var);
	switch ($var) {
		case 'a':
			return true;
			break;
		case 'e':
			return true;
			break;
		case 'i':
			return true;
			break;
		case 'o':
			return true;
			break;
		case 'u':
			return true;
			break;	
		default:
			return false;
			break;
	}
}

function find($var,$case=false){
	if ($case == 'first'){
		if(is_array($var)){
				return $var[0];
		}
	return substr($var, 0,1);
	}
	else if (is_numeric($case)){
		if(is_array($var)){
				return $var[$case-1];
		}
	return substr($var, $case-1,$case-1);
	}
	else if ($case == 'last'){
		if(is_array($var)){
			return $var[count($var)-1];
		}
	return substr($var,count($var)-1);
	}
	else{
	return "Error! Find(Needs 2 variables)";
}
}

function reverse($var){
	$i = false;
	if (!is_array($var)){
		$i = true;
		$var = str_split($var);
	}
	$var = array_reverse($var);
	print_r($var);
	if($i){
		implode($var);
	}
	return $var;
}

function random($why){
	if (!is_array($why)){
		$why = str_split($why);
	}
	return $why[rand(0,(count($why)-1))];
}

$a = 'Be Impressed Peasant';
$b = ['Be','Impressed','Peasant'];

var_dump(isEven(1));
var_dump(isEven(2));

var_dump(isVowel('g'));
var_dump(isVowel('a'));

var_dump(find($a,'first'));
var_dump(find($b,'last'));
var_dump(find($a,2));

var_dump(reverse($a));
var_dump(reverse($b));

var_dump(random($a));
var_dump(random($b));