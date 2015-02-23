<?php
function maxXor( $l,  $r) {
    $result = ($l ^ $r);
    for($i=$l; $i<$r; $i++){
        for($j=$l; $j<$r; $j++){
            if (($i ^ $j) > $result){
                $result = $i ^ $j;
            }
        }
        $l++;
    }
    return $result;
}
    
$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d", $_l);


fscanf($__fp, "%d", $_r);

$res = maxXor($_l, $_r);
echo $res;

?>
