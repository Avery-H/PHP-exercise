<?php

// function testing1($var){
// 	$i = "";
// 	$x = [];
// 	foreach ($var as $key => $value) {
// 		if ($i === "" || $i < $value){
// 			$i = $value;
// 			array_push($x,$value);

// 		}

// 	}
// 	return $i. ", ".$x[count($x)-2];
// } 
// $asdf = [-65,5,-13,-23,-8,-1];
// echo testing1($asdf);

function lastString($string){

	$arr = explode(" ", $string);
	$new = [$arr[0]];
	$y = 0;
	$x = "";
	foreach ($arr as $key => $value) {
		if ($y > strlen($value)){
			$x = $value;


		}
		$y = strlen($value);
}

return $x;
}

echo lastString("Gene is an amazing cook");

// function subStringNew($string){
// 	$arr = str_split($string); 
// 	$newArr = [];
// 	foreach ($arr as $key1 => $value1) {
// 		foreach ($arr as $key2 => $value2) {
// 				array_push($newArr,$value2);
// 		}
// 	}
	
// }