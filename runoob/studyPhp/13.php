<?php
error_reporting(E_ALL);
class beers{
	const softdrink = 'rootbeer';
	public static $ale = 'ipa';
}
$rootbeer = 'AA & W';
$ipa = 'Alexander Keith\'s';
echo "i'd like an ${beers::softdrink}\n";
echo "i'd like an ${beers::$ale}\n";
?>