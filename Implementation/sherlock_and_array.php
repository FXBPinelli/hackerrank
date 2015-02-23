<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $n = fgets($_fp);
    $a = fgets($_fp);
    
    
    $tab = explode(' ', $a);
    $exists = FALSE;
    $before = 0;
    $after = array_sum(array_slice($tab, 1));
    $tabLength = count($tab);
    
    if($tabLength == 1){
        $exists = TRUE;
    }
    
    for($j=1; $j<$tabLength; $j++){
        $before += $tab[$j-1];
        $after -= $tab[$j];

        if($before == $after){
            $exists = TRUE;
        }
    }

    if($exists == TRUE){
        echo "YES\n";
    }
    else{
        echo "NO\n"; 
    }
}
?>