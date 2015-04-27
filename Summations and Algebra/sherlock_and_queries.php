<?php
$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%d %d", $n, $m);

$a = explode(' ', trim(fgets($_fp)));
$a = array_combine(range(1, count($a)), array_values($a));

$b = explode(' ', trim(fgets($_fp)));
$b = array_combine(range(1, count($b)), array_values($b));

$c = explode(' ', trim(fgets($_fp)));
$c = array_combine(range(1, count($c)), array_values($c));

$mod = pow(10, 9) + 7;
$value = array();

for($i=1; $i<=$m; $i++){
    if(empty($value[$b[$i]])){
        $value[$b[$i]] = $c[$i];
    }
    else{
        $value[$b[$i]] = ($value[$b[$i]] * $c[$i]) % $mod;
    }
}

for($i=1; $i<=$n; $i++){
    for($j=1; ($j*$i)<=$n; $j++){
        if(!empty($value[$i]))
            $a[$j*$i] = ($a[$j*$i] * $value[$i]) % $mod;
    }
}

echo implode(' ', $a);

?>