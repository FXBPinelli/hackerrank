<?php
$_fp = fopen("php://stdin", "r");
$pi = str_split('31415926535897932384626433833');
$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $song = explode(" ", trim(fgets($_fp)));
    $result = "It's a pi song.\n";
	
    foreach($song as $key => $word){
        if(strlen($word) != $pi[$key]){
            $result = "It's not a pi song.\n";
        }
    }

    echo $result;
}
?>