<?php
function echoln(...$args){
    foreach ($args as $value){
        echo $value," ";
    }
    echo "\n";
}

function queryDie(){
    global $link,$query;
    mysqli_query($link, $query) or die(mysqli_error($link));
    echo "query success";
}

function query(){
    global $link,$query;
    $result = mysqli_query($link, $query);
    if($result){
        return $result;
    }else{
        die(mysqli_error($link));
    }
    
}

$link = mysqli_connect("localhost","root","123") or die("connect failed");

mysqli_select_db($link, "moviesite") or die(mysqli_error($link));

$image_dir = 'D:\workspace\images';
$thumb_dir = $image_dir.'\thumbs';
