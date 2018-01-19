<?php
require_once 'include/include1.php';
$a = 35.9;
$b = 31.9;
$c = 199;
$min = 100000;
$an = 0;
$bn = 0;
for($i = 0; $i < 10; $i++){
    $n = ceil(($c - $a * $i) / $b);
    $total = $a*$i+$b*$n;
    if($total < $min){
        $min = $total;
        $an = $i;
        $bn = $n;
    }
    echoln($a,":",$i,$b,":",$n,"total :",$total);
}

echoln("the optimal method is:",$an,$bn,$min);

