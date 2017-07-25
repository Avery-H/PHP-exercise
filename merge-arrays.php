<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael','Bob','Bobby'];

function findEm($asdf,$fdsa){
	if (is_int(array_search($asdf,$fdsa))){
		return true;
	}
	else{
		return false;
	}
}

var_dump(findEm($compare[1],$names));

function findMult($arr,$arr2){
	$i=0;
	foreach ($arr as $key => $value) {
		if (findEm($value,$arr2)){
			$i++;
		}
	}
	return $i;
}
echo findMult($compare,$names) .PHP_EOL;

function combine_arrays($a,$b){
	$temp = [];
if ($b > $a){
	$c = $a;
	$a = $b;
	$b = $c;
}
foreach ($a as $key => $value) {
		if (findEm($value,$b) || !array_key_exists($key,$b)){
			array_push($temp,$value);
		}
		else {
			array_push($temp, $value);
			array_push($temp, $b[$key]);
		}
	}
return $temp;
}
$newArray = combine_arrays($names,$compare);
print_r($newArray);