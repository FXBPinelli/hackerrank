<?php
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    fscanf($_fp, "%d %d", $n, $k);
    $an = trim(fgets($_fp));
    $tab = explode(' ', $an);
    
    $present = 0;
    foreach($tab as $a){
        if($a <= 0){
            $present++;
        }        
    }
    echo ($present>=$k) ? "NO\n" : "YES\n";
}    
?>