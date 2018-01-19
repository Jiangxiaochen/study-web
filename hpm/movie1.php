<?php

// $sessionpath = session_save_path();
// echo $sessionpath;
// echo null;
// setcookie("name","joe",time()+60);
session_start();
// $_SESSION["name"] = "joe123";
// $_SESSION["authuser"] = 1;
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;

if(($_SESSION['username'] == 'joe') && ($_SESSION['userpass'] == '12345')){
    $_SESSION['authuser'] = 1;
}else{
    echo "sorry! permission denied!";
    exit();
}
?>

<html>
<head><title>find favmovie</title></head>
<body>
<a href="movieSite.php?fav_movie=life of brain">click here to see my favmovie!</a>
</body>
</html>