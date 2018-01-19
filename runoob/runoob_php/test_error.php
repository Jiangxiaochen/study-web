<?php



if(!file_exists("welcome.txt")){
	die('file not exists');
}else{
	$file = fopen("welcome.txt", "r");
}

function customError($errno, $errstr){
	echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "脚本结束";
	die();
}

set_error_handler("customError",E_USER_WARNING);

$test=2;

if ($test>1){
	trigger_error("变量值必须小于等于 1",E_USER_WARNING);
}