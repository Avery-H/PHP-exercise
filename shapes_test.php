<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$reck = new Rectangle(5,6);

$okay = var_dump($reck);


var_dump($reck->area());
var_dump($reck->perimeter());

$quare = new Square(5);
var_dump($quare->area());

var_dump($quare->perimeter());
