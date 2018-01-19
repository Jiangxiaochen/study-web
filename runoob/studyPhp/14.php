<?php
error_reporting();
$array = array('fruit' => 'apple','veggie' => 'carrot' );

print($array['fruit']."\n");
echo "{$array['veggie']}\n";
print($array[fruit]."\n");

define('fruit', 'veggie');

print $array['fruit']."\n";
print($array[fruit]."\n");

print "hello $array[fruit]"."\n";

class A{
	private $A;
}

$a = array(A);
echo "{$a['AA']}\n";

?>