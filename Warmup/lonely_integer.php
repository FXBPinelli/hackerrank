<?php
function lonelyinteger( $a) {
    sort($a);
    for ($i=0; $i<=count($a)-1; $i=$i+2){
        if (!isset($a[$i+1]) || $a[$i] != $a[$i+1]){
            return $a[$i];
        }
    }
    
}
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_a_cnt);
$_a = fgets($__fp);
$_a = split(' ',$_a);
$res = lonelyinteger($_a);

echo $res;
?>