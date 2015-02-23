<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

$tab = array();
for($i=0; $i<$t; $i++){
    $tab[] = fgets($_fp);
}

foreach($tab as $cycle){
    $result = 1;
    if($cycle > 0){
        for($i=0; $i<$cycle; $i++){
            ($i % 2 == 0) ? $result *= 2 : $result ++;  
        }
    }
    echo($result . "\n");
}
?>