<?php
session_start();
if($_SESSION['authuser'] != 1){
    echo "sorry! permission denied!";
    exit();
}
echo "welcome!$_SESSION[username]";
// echo "welcome!$_COOKIE[name]";
echo '<br/>';
define('FAVMOVIE', 'The Life of Brain');
echo "my favorite movie is: ";
echo FAVMOVIE;
echo '<br/>';
$movierate = 5;
echo 'my movie rating for this movie is: ';
echo $movierate;
echo '<br/>';
echo "my second favorite movie is: ";
echo $_GET['fav_movie'];
echo '<br/>';

