<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $result = '';
    $n = fgets($_fp) - 1;
    $a = (int)fgets($_fp);
    $b = (int)fgets($_fp);

    if($a > $b){
        $tmp=$a;
        $a=$b;
        $b=$tmp;
    }
    
    for($j=0; $j<=$n; $j++){
        $toAdd = ($a*($n-$j)+($b*$j));
        if($toAdd != $result){
            $result .= $toAdd . ' ';
        }
    }
   echo $result . "\n";
}
?>