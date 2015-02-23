<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for ($i=0; $i<$t; $i++){
    $n = fgets($_fp);
    if(isFibo((int)$n)){
        echo "IsFibo\n";
    }
    else{
        echo "IsNotFibo\n";
    }
}

function isFibo($n){
    $fibo1 = 5*$n*$n + 4;
    $fibo2 = 5*$n*$n - 4;
    
    $sqrt1 = intval(sqrt($fibo1));
    $sqrt2 = intval(sqrt($fibo2));
        
    if($sqrt1*$sqrt1 == $fibo1 || $sqrt2*$sqrt2 == $fibo2){
        return TRUE;
    }
    return FALSE;
}
?>