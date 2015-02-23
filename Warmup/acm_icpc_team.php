<?php
$_fp = fopen("php://stdin", "r");

$firstline = fgets($_fp);
$tabProp = explode(' ', $firstline);


$tabPers = array();
for ($i=0; $i<$tabProp[0]; $i++){
    $tabPers[] = fgets($_fp);
}

$tabMax = array();
$people = $max = 0;
foreach ($tabPers as $key1 => $person1){
    foreach($tabPers as $key2 => $person2){
        if($person2 != $person1){
            $nbKnown = substr_count($person2 | $person1, '1');
            if($max <= $nbKnown) {
                if(!in_array($nbKnown, $tabMax)){
                    $tabMax = array();
                }
                $tabMax[] = $nbKnown;
                $max = $nbKnown;
            }
        }
    }
    unset($tabPers[$key1]);
}

echo $max;
echo "\n";
echo count($tabMax);

?>