<?php
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);

for($i=0; $i<$t; $i++)
{
    fscanf($_fp, "%d %d", $b, $w);
    fscanf($_fp, "%d %d %d", $x, $y, $z);
    
    if(($x + $z) < $y){
        echo ($x + $z)*$w + $x*$b;
    }
    elseif(($y + $z) < $x){
        echo ($y + $z)*$b + $y*$w;
    }
    else{
        echo $x*$b + $y*$w;
    }
    
    echo "\n";

}
?>