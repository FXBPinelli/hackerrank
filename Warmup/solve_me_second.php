<?php
function solveMeSecond($a,$b){
    return $a + $b;
}
$handle = fopen ("php://stdin","r");
$t = fgets($handle);
for($i=0; $i<$t; $i++)
{
    $lis = split(' ', fgets($handle));
     $_a = (int)$lis[0];
     $_b = (int)$lis[1];
    $sum = solveMeSecond($_a,$_b);
    print($sum) . "\n";
}
fclose($handle);
?>