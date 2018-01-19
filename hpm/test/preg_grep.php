<?php

$arr = array();
$arr['aa'] = 11.3;
$arr[1] = 3;
$arr[3.1] = 2;
$arr[10] = 'a';
$arr[] = 3.4;
$arr[] = '4.5';
$arr[] = '.5';

// print_r($arr);

// $arr = array(1.2,2.3,3.4);

// print_r(preg_grep('/^(\d+)?\.\d+$/', $arr));

preg_match_all('/\w\d??\d\w/', 'aa32bbcc3d',$arr);

print_r($arr);

// $str = 'Acer-laptop-battery/Acer-3UR18650F-3-QC151-battery-17.html';
// $reg = '/battery\/(.*)-battery-.*\.html/U';
// $s = preg_match_all( $reg, $str, $arr );
// echo "<pre>";
// print_r( $arr );
// echo "</pre>";