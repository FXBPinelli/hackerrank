<?php
    
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);
$k = (int)fgets($_fp);

$tab = array();
$result = '';
for($i=0; $i<$t; $i++)
{
    $lis = intval(fgets($_fp));
    $tab[] = $lis;
}

sort($tab);
$nbtest = $t - $k + 1;

$result = '';
for ($i=0; $i<$nbtest; $i++){
    $value = $tab[$k+$i-1] - $tab[$i];
    if($result > $value || empty($result)) {
        $result = $value;
    }
}

echo((int)$result);

fclose($_fp);
?>