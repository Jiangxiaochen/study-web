<?php
//常量
define("GREETING","welcome jxc!");
echo GREETING;
//字符串
echo strlen(GREETING)."\n";
echo(strlen("嗨"));
$txt = "你好，我是蒋晓琛！";
echo "\n";
echo(strlen($txt));
echo "\n";
echo strpos($txt, "蒋");
//比较运算符
if (12 == "12.adf") {
	echo "\nequal";
}

if(12 === "12"){
	echo "\nabsolute equal\n";
}
if(12 === 12){
	echo "\nabsolute equal\n";
}

if (12 !== "12"){
	echo "not equal";
}


//数组运算符

$x = array('a' => "red", "b" => "green");
$y = array('c' => "blue", 'd' => "yellow");
$z = $x + $y;
var_dump($z);

$x = array('1' => 'blue', '2' => 'green');
$y = array('1' => 'blue', 2 => 'green');
$z = array('2' => "green", '1' => 'blue');
var_dump($x == $y);
var_dump($x === $y);
var_dump($x == $z);
var_dump($x === $z);

$x1 = &$x;
$x1[1] = 'blue2';

var_dump($x);

