<?php

function fun1($string){
echo ucwords(strtolower($string)) .PHP_EOL;
}

function fun2($first,$last){
echo "Hello " .$first ." ".$last;
}

do{
fwrite(STDOUT, "Tell me something ");
$str1 = trim(fgets(STDIN));
}while(is_numeric($str1));
fun1($str1);

fwrite(STDOUT, "First name ");
$name1 = trim(fgets(STDIN));

fwrite(STDOUT, "Last name ");
$name2 = trim(fgets(STDIN));
fun2($name1, $name2);