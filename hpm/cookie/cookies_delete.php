<?php

$expire = time() - 1000;

setcookie('username',null,$expire);
setcookie('remember_me',null,$expire);

header('refresh:5;url=cookies_test.php');

?>

<h1>deleting cookies</h1>
<p>if your browser doesn't redirect you automatically,
<a href='cookies_test.php'>click here!</a></p>
