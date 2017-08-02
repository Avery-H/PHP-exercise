<?php

function logMessage($logLevel, $message)
{
    $filename = "log-".date('Y-m-d').".log";
    $handle = fopen($filename, 'a');
    fwrite($handle, " ".date('Y-m-d H:i:s') ." {$logLevel} {$message}".PHP_EOL);
    fclose($handle);
}

function logInfo($message){
	$filename = "log-".date('Y-m-d').".log";
    $handle = fopen($filename, 'a');
    fwrite($handle, " ".date('Y-m-d H:i:s') ." INFO {$message}".PHP_EOL);
    fclose($handle);
}

function logError($message){
	$filename = "log-".date('Y-m-d').".log";
    $handle = fopen($filename, 'a');
    fwrite($handle, " ".date('Y-m-d H:i:s') ." ERROR {$message}".PHP_EOL);
    fclose($handle);
}
logInfo("This is an info message.");
logError("This is an Error message.");
