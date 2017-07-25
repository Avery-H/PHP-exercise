<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modded($a, $b)
{
	return $a % $b;
}
// Add code to test your functions here
echo add(2,2) .PHP_EOL;
echo subtract(2,2).PHP_EOL;
echo multiply(2,2).PHP_EOL;
echo divide(2,2).PHP_EOL;
echo modded(2,2).PHP_EOL;