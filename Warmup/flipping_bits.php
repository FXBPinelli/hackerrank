<?php
function flip($a){
    $val = intval($a);
    $mask = bindec('11111111111111111111111111111111');
    $val = $val ^ $mask;
    return ($val);
}
    
$_fp = fopen("php://stdin", "r");
$t = fgets($_fp);
for($i=0; $i<$t; $i++)
{
    $lis = split(' ', fgets($_fp));
    $lis = flip($lis[0]);
    print($lis) . "\n";
}
fclose($_fp);

?>