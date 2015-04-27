<?php
$_fp = fopen("php://stdin", "r");

$n = fgets($_fp);

$sticks = fgets($_fp);
$tabSticks = explode(' ', $sticks);
sort($tabSticks);
echo $n;

while(!empty($tabSticks)){
    $toDel = $tabSticks[0];
    $nbsticks = count($tabSticks);
    
    for($i=0; $i<$nbsticks; $i++){
        $tabSticks[$i] -= $toDel;
        if($tabSticks[$i] == 0){
            unset($tabSticks[$i]);
        }
    }
    
    if(!empty($tabSticks)){
        $tabSticks = array_values($tabSticks);
        echo count($tabSticks) . "\n";
    }
}

?>