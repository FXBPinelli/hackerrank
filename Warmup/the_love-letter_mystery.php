<?php
$_fp = fopen("php://stdin", "r");

$l = fgets($_fp);

for ($i=0; $i<$l; $i++){
    $string = fgets($_fp);
    $string = trim($string);
    $nb_chars = strlen($string);
    
    $tab = str_split($string);
    if($nb_chars % 2 != 0){
        $nb_chars--;
    }
    $inv_tab = array_reverse($tab);

    $result = 0;
    for($j=0; $j<$nb_chars/2; $j++){
        if(ord($inv_tab[$j]) > ord($tab[$j])){
            $result += ord($inv_tab[$j]) - ord($tab[$j]);
        }
        else {
            $result += ord($tab[$j]) - ord($inv_tab[$j]);
        }
    }
    
    echo $result . "\n";
}
?>