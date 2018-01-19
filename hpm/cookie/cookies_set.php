<?php
$expire = time() + 60*60*24*30;
setcookie('username','test_user',$expire);
setcookie('remember_me','yes',$expire);

header('refresh:5;url=cookies_test.php');

?>

<h1>setting cookies</h1>
<p>redirecting</p>
<p>if you don't redirect you automatically,<a href='cookies_test.php'>click here!</a></p>