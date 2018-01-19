<?php

$conn = new mysqli("localhost","root","123","myDB");
if($conn->connect_error){
	die();
}

$table = "MyGuests";
$sql = "update $table set firstname='jjj' where id>3";

echo $conn->query($sql);

$conn->close();