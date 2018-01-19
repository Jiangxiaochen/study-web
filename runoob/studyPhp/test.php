<?php
if(NAN == true){
	echo "NaN equals true";
}

var_dump(array(<<<eod
foobar!
eod
));

$juice = 'apple';
echo("he drank some $juice juice.".PHP_EOL);
echo "he drank some $juices juice.";

class foo{
	var $bar = 'i am bar.';
	
}
$foo = new foo();
$bar = 'bar';
$baz = array('foo','bar','baz','quux');
echo "\n{$foo->$bar}\n";
echo "{$baz[1]}\n";
?>
