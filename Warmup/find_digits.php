<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $n = fgets($_fp);
    $tab = str_split(trim($n));
    $count = 0;
    
    foreach($tab as $digit){
        if ($digit != 0 && $n%$digit == 0){
            $count++;
        }
    }
    echo $count . "\n";
}
?>