<?php
$servername="localhost";
$username="root";
$password="root";
$conn=mysqli_connect($servername, $username, $password);
if(!$conn)
{
	die("not connected".mysqli_connect_error());
}
$sql="create database demophp";
if(mysqli_query($conn,$sql))
{
	echo "database created";
}
else
{
	echo "some problem is there";
}
?>
