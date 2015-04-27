<?php
$_fp = fopen("php://stdin", "r");
$h = trim(fgets($_fp));
$m = trim(fgets($_fp));
$result = '';
$ones = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eightteen", "nineteen"); 
$tens = array("", "", "twenty", "thirty", "fourty", "fifty", "sixty", "seventy", "eigthy", "ninety"); 

$topast = $m <= 30 ? 'past' : 'to';

$minutes = $m;
if($m > 30){
    if($m != 45){
        $minutes = 60 - $m;
    }
    $h++;
}
$Whours = $ones[$h];
switch ($minutes) {
    case '00':
        if($h == 0){
           $result = "midnight";
        }
        elseif($h == 12){
            $result = "midday";
        }
        else {
          $result = $Whours . " o' clock";
        }
        break;
    
    case '15':
        $result = 'quarter past ' . $Whours;
        break;
    
    case '30':
        $result = 'half past ' . $Whours;
        break;
    
    case '45':
        $result = 'quarter to ' . $Whours;
        break;
    
    default:
        $Wminutes = minToWord($minutes, $ones, $tens);
        break;
}

if($result == ''){
    $result = $Wminutes . ' minutes ' . $topast . ' '. $Whours;
}

echo $result;

function minToWord($minutes, $ones, $tens){
    if($minutes > 19){
        $tabMin = str_split($minutes);
        return $tens[$tabMin[0]] . ' ' . $ones[$tabMin[1]];
    }
    else{
        return $ones[$minutes];
    }
}
?>