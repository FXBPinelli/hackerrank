<?php
$_fp = fopen("php://stdin", "r");

$firstLine = fgets($_fp);

$firstTab = explode(" ", $firstLine);

$result = 0;
for($i=0; $i<$firstTab[1]; $i++){
    $line = fgets($_fp);
    $tab = explode(" ", $line);
    $nb = $tab[1] - $tab[0] + 1;
    $result += $nb * $tab[2];
}

echo floor($result/$firstTab[0]);

?>