<?php 

//associative array
$capitals = array("USA"=>"Washington DC",
                 "Japan"=>"Kyoto",
                 "South Korea"=>"Seoul",
                 "India"=>"New Delhi");

$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);
$keys = array_keys($capitals);

foreach($keys as $key){
    echo "{$key} <br> ";
}



 
?>