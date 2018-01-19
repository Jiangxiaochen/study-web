<?php
$mydir = dirname(__FILE__);
require_once $mydir."/../include/include1.php";

function isUser($username,$password){
    global $link;
    $username = mysqli_real_escape_string($link, $username);
    $password = mysqli_real_escape_string($link, $password);
    $query = "select admin_level from site_user where username
    ='$username' and password=password('$password')
    ";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    $b =  true;
    if(mysqli_num_rows($result) > 0){
        $b = true;
    }else{
        $b = false;
    }
    mysqli_free_result($result);
    return $b;
}

// require_once 'auth.inc.php';