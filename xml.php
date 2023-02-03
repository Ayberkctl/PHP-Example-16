<?php
/*
$xml='<?xml version="1.0" encoding="UTF-8" ?>
<ayberk>
    <name>Ayberk</name>
    <surname>catal</surname>
    <siteler>
        <site id="2">
         <url>https://ayberkcatal.com</url>
         <header>Ayberkcatal.com - web site</header>
        </site>
        <site id="3">
         <url>https://github.com/Ayberkctl</url>
         <header>Ayberkctl - My github acount</header>
        </site>
    </siteler>
</ayberk>
';
$xml = simplexml_load_string($xml);
print_r($xml);
*/


if(file_exists('ayberk.xml')){
    $xml = simplexml_load_file('ayberk.xml');
    
 print_r($xml);
}else {
  
    exit('Failed to open test.xml.');
}
?>