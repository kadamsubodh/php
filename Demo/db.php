<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="demophp";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("connection error". $conn->connect_error);
}
else{
	return $conn;
}
?>