<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $k = fgets($_fp);
    
    $root = $k/2;
    
    echo floor(pow($root, 2));
    echo "\n";
}
?>