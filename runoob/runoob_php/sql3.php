<?php

$server_name = "localhost";
$user_name = "root";
$password = "123";
$db_name = "myDB";

$conn = new mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error){
	die($conn->connect_error);
}

$table_name = "MyGuests";
$sql = "select id,firstname,lastname from $table_name where id>1 order by firstname desc, id desc";

$result = $conn->query($sql);

if($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
		echo "id: ", $row["id"], " name: ", $row["firstname"], " ", $row["lastname"], "<br>";
	}
}else{
	echo 0;
}

$conn->close();

