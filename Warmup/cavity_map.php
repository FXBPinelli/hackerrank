<?php
$_fp = fopen("php://stdin", "r");

$depth = fgets($_fp);
$first = $last = '';
$map = array();

$first = fgets($_fp);

$map[0] = str_split(trim($first));
for($i=1; $i<$depth-1; $i++){
    $line = fgets($_fp);
    $map[$i] = str_split(trim($line));
}

$last = fgets($_fp);
$map[$depth-1] = str_split(trim($last));

$mapResult = $map;
echo $first;
for($j=1; $j<$depth-1; $j++){
    echo $map[$j][0];
    for($k=1; $k<$depth-1; $k++){
        if($map[$j][$k] > $map[$j-1][$k]
           && $map[$j][$k] > $map[$j+1][$k]
           && $map[$j][$k] > $map[$j][$k-1]
           &&$map[$j][$k] > $map[$j][$k+1]){
            echo "X";
        }
        else {
            echo $map[$j][$k];
        }
    }
    echo $map[$j][$depth-1];
    echo "\n";
}
echo $last;
?>