<?php

$conn = new mysqli("localhost","root","123","myDB");

if($conn->connect_error){
	echo $conn->connect_error;
	die();
}

$sql = "create table MyGuests(
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
)";

if($conn->query($sql) === true){
	echo 'create MyGuests success',"\n";
}else{
	echo $conn->error,"\n";
}

$sql2 = "insert into MyGuests (firstname, lastname, email) 
		values ('john','doe','john@gmail.com');";

$sql2 .= "insert into MyGuests (firstname, lastname, email) 
		values ('john2','doe2','john2@gmail.com');";

$sql2 .= "insert into MyGuests (firstname, lastname, email) 
		values ('john3','doe3','john3@gmail.com');";

if($conn->multi_query($sql2) === true){
	echo "insert success\n";
}else{
	echo $conn->error,"\n";
}

$conn->close();
?>