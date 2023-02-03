<?php
/*
header('Content-type:text/xml');

$xml = new SimpleXMLELement('<ayberk/>');
$xml->addChild('name','Ayberk');
$xml->addChild('surname','catal');
$siteler = $xml->addChild('siteler');

    $site = $siteler->addChild('site');
        $site->addAttribute('id',2);
        $site->addChild('url','https://ayberkcatal.com');
        $site->addChild('header','Ayberkcatal.com - web site');

    $site = $siteler->addChild('site');
        $site->addAttribute('id',3);
        $site->addChild('url','https://github.com/Ayberkctl');
        $site->addChild('header','Ayberkctl - My github acount');

echo $xml->asXML();*/

$dizi=[
    "name" =>  "ayberk ",
    "surname" => "catal",
    "siteler" => [
      0 =>[
          "url" =>"https://ayberkcatal.com",
          "header" =>"Ayberkcatal.com - web site"
      ],
      1 =>[
          "url" =>"https://github.com/Ayberkctl",
          "header" =>"Ayberkctl - My github acount"
      ]
  ]
];
 
$xml = new SimpleXMLELement('<ayberk>test</ayberk>');

function arrayToXml($dizi,$xml) {
    foreach ($dizi as $key => $val){
        if(is_array($val)){
            if(is_numeric($key)){$key='site';}
            arrayToXml($val, $xml->addChild($key));
        }else {
            $xml->addChild($key, $val);
        }
        
    }
    return $xml->asXML();
}

echo arrayToXml($dizi,$xml);


?>