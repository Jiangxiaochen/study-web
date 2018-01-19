<?php
session_unset();
require_once 'header.php';
?>




<html>
<head>
<title>login page</title>
</head>
<body>
<form action="movie1.php" method="post">
enter your username: <input type="text" name="user"/><br>
enter your password: <input type="password" name="pass"/><br>
<input type="submit" name="submit" value="submit"/><br>
</form>
</body>
</html>