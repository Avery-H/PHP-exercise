<?php

class Log
{
    private $fileName;
    public $message;
    protected $handle;

    public function __construct($message,$fileName='Log'){
        if(is_string($fileName)){
        $this->fileName = $fileName;
        $this->message = $message;
        $this->logMessage($fileName,$message);
        }
        else{
            return "Error: Filename Not A String";
            die();
        }
    }

    public function __destruct(){
        fclose($this->handle);
    }


    public function logMessage($fileName, $message)
    {
        $filename = $fileName.'-'.date('Y-m-d').".log";
        $theHandle = fopen($filename, 'a');
        fwrite($theHandle, " ".date('Y-m-d H:i:s') ."{$message}".PHP_EOL);
        $this->handle = $theHandle;
    }
}