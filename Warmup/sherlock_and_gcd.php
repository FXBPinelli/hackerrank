<?php    
function pgcd($a, $b){
    $reste = $a % $b;
    
    if($reste > 0){
        return pgcd($b, $reste);
    }
    
    return $b;
}
    
$_fp = fopen("php://stdin", "r");

$t = fgets($_fp);

for($i=0; $i<$t; $i++){
    $n = fgets($_fp);
    $an = trim(fgets($_fp));
    $tab = explode(' ', $an);
    if($n == 1 && $tab[0] > 1){
        echo "NO\n";
        continue;
    }
    
    $pgcd = pgcd($tab[0], $tab[1]);
    for($j=1; $j<$n-1; $j++){
        $pgcd = pgcd($tab[$j+1], $pgcd);
    }
    
    $result = ($pgcd > 1) ? "NO" : "YES";
    echo $result . "\n";
}

?>