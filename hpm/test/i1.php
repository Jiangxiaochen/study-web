<?php
require_once 'included.php';
require_once 'included.php';
if(isset($_SESSION['logged'])){
    echo 'set<br/>';
}
$_SESSION['logged'] = 1;
?>

<a href='i2.php'>jump to i2</a>