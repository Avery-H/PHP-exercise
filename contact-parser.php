<?php

function parseContacts($filename)
{
    $contacts = array();
	$handle = fopen('contacts.txt', 'r');
	$contents = fread(fopen('contacts.txt', 'r'), filesize($filename));
	$contacts = explode("\n",$contents);
    fclose($handle);
   	foreach ($contacts as $key => $value) {
    	$contacts[$key] = explode("|", $value);
    	$contacts[$key]['name'] = $contacts[$key][0];
    	unset($contacts[$key][0]);
    	$contacts[$key]['number'] = $contacts[$key][1];
    	unset($contacts[$key][1]);
    	$contacts[$key]['number'] = substr($contacts[$key]['number'], 0,3) . "-" . substr($contacts[$key]['number'], 3,3) ."-". substr($contacts[$key]['number'], 6,4);
   	}
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
