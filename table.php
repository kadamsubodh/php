<?php
$servername="localhost";
$username="root";
$password="root";
$db="demophp";
$conn=mysqli_connect($servername, $username, $password,$db);
if(!$conn)
{
	die("not connected".mysqli_connect_error());
}
$sql="create table test(id int(20), name varchar(50), age int(20), city varchar(50))";
if(mysqli_query($conn,$sql))
{
	echo "table is created";
}
else
{
	echo "some problem is there";
}
?>
