<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    fscanf($_fp, "%d %d", $a, $b);

    $sqrta = (int)sqrt($a);
    $sqrtb = (int)sqrt($b);
    
    $nbsqrt = $sqrtb - $sqrta;
    
    if ($a == $sqrta * $sqrta) 
    {
        $nbsqrt++;
    }
    
    echo $nbsqrt . "\n";
}

?>