<?php
$_fp = fopen("php://stdin", "r");

$string = fgets($_fp);

$odd = FALSE;
foreach (count_chars($string, 1) as $i => $val) {
    if ($val % 2 != 0) {
        if ($odd == TRUE){
            echo 'NO';
            exit;
        }
        $odd = TRUE;
    }
}

echo 'YES';
?>