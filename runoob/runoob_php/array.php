<?php

if(1){
	echo "1\n";
}elseif (2) {
	echo "2";
}else{
	echo "3";
}

//switch
$n1 = '1';
switch ($n1) {
	case 'red':
		echo "you like red\n";
		break;
	
	default:
		echo "you don't like red\n";
		break;
}

$cars = array('volvo', 'bmw', 'toyota');
echo 'i like '.$cars[0].', '.$cars[1].', '.$cars[2]."\n";

$haha = array('sam', 'kdk', 'dkkkkk' => 'kdjf', 6 => 'k11', 'k7');

$mixed = $cars + $haha;

foreach ($mixed as $key => $value) {
	echo "key: ".$key.", "."value: ".$value."\n";
}

$nums = array(1,2,3,4);
foreach ($nums as $key => $value) {
	echo "$value\n";
}


