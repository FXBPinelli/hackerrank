<?php
$_fp = fopen("php://stdin", "r");

fscanf($_fp, '%d %d', $length, $t);

$lanes = fgets($_fp);
$tab = explode(' ', trim($lanes));

for ($i=0; $i<$t; $i++){
    fscanf($_fp, '%d %d', $start, $stop);
    $max = 4;
    
    for($j=$start; $j<=$stop; $j++){
        if($max > $tab[$j]){
            $max = $tab[$j];
        }
    }
    
    echo $max . "\n";
}

?>