<?php
/*
  $dizi=[
      "name" =>  "ayberk ",
      "surname" => "catal",
      "siteler" => [
        [
            "url" =>"https://ayberkcatal.com",
            "header" =>"Ayberkcatal.com - web site"
        ],
        [
            "url" =>"https://github.com/Ayberkctl",
            "header" =>"Ayberkctl - My github acount"
        ]
    ]
  ];
echo json_encode($dizi,JSON_FORCE_OBJECT);
*/
$json='{
    "name":"ayberk",
    "sorname":"catal",
    "siteler":[
        {
            "url": "https://ayberkcatal.com",
            "header":"Ayberkcatal.com - web site"
        },
        {
            "url": "https://github.com/Ayberkctl",
            "header":"Ayberkctl - My github acount"
        }   
    ]
}';
var_dump(json_decode($json,true)) ;

