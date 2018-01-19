<?php

echo 'file is: '.__FILE__."\n";
echo 'dir is: '.__DIR__."\n";
echo 'func name is: '.__FUNCTION__."\n";

function f1(){
	echo 'func name is: '.__FUNCTION__."\n";
}

f1();

class c1{
	function _print(){
		echo __CLASS__."\n";
		echo __FUNCTION__."\n";
	}
}

$co1= new c1();
$co1->_print();



