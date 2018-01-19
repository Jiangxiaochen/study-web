<?php
$servername = "localhost";
$username = "root";
$password = "123";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";

$sql = "create database myDB";
if($conn->query($sql) === true){
    echo 'create database myDB success!',"\n";
}else{
    echo $conn->error;
}
$conn->close();
?>