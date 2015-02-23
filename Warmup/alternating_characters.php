<?php
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for ($i=0; $i<$t; $i++){
    $shank = fgets($_fp);
    $nbchars = strlen(trim($shank));
    
    $result = 0;
    $prev = '';
    
    for($j=0; $j<$nbchars; $j++){
        if(!empty($prev) && $shank[$j] == $prev ){
            $result++;
        }
        $prev = $shank[$j];
    }

    echo $result . "\n"; 
}

?>