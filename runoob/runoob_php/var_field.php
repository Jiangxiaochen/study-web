<?php
$x = 5;
function myTest(){
	$x = 10;
	$y = 11;
	global $x;
	$x = 20;
	echo($x."\n");
}

myTest();
echo($x."\n");

function myTest1(){
	static $x = 0;
	$x++;
	echo "$x";
}

for ($i=0; $i < 10; $i++) { 
	myTest1();
}
?>
