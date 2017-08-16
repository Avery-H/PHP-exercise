<?php

require_once "sodana.php";

$soda = new Sodana();
$soda->brandName = 'HitlerDidNothingWrong';
$soda->isFull = true;
$soda->isOpen = false;
$soda->expirationDate = 12251996;

$soda->openSoda();
$soda->pourOut();

var_dump($soda);