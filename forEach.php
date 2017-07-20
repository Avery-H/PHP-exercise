<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $things) {
	if (is_array($things)){
		echo "array(";
		foreach ($things as $things) {
			echo $things;
		}
		echo ")" .PHP_EOL;
	}
	else{
	echo $things .PHP_EOL;
}
}