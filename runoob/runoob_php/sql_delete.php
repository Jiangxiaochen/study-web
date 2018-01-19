<?php

$conn = new mysqli("localhost","root","123","myDB");
if($conn->connect_error) die();

$sql = "delete from MyGuests where firstname='jjj'";

$conn->query($sql);

$conn->close();