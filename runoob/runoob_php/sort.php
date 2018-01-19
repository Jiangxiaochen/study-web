<?php

$nums = array(-1,4,12,40,11,0,5);
//升序
sort($nums);
//var_dump($nums);
//降序
rsort($nums);
//var_dump($nums);
//根据值
asort($nums);
var_dump($nums);

foreach ($nums as $key => $value) {
	echo "$key, "."$value\n";
}
