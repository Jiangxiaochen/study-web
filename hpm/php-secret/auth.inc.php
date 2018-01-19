<?php
session_start();

if(!isset($_SESSION['logged'])){
    header('Refresh: 15; URL=login.php');
    echo "<p>you will be redirected to the login page in 5 seconds</p>";
    echo "<p>if your browser doesn't redirect you properly automatically,
        <a href='login.php'>CLICK HERE</a></p>";
    $_SESSION['redirect'] = $_SERVER['PHP_SELF'];
    die();
}