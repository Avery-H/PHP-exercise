<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

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