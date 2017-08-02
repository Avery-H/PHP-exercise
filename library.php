<?php

function isEven($var){
	if(is_numeric($var) && ($var % 2 ) === 0){
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
	return substr($var,strlen($var)-1);
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
	if($i){
		$var = implode($var);
	}
	return $var;
}

function random($why){
	if (!is_array($why)){
		$why = str_split($why);
	}
	return $why[rand(0,(count($why)-1))];
}

function write($filename,$messege){
    $handle = fopen($filename, 'a');
    fwrite($handle, $messege);
    fclose($handle);
}