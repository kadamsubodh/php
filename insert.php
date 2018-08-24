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
$sql="insert into test values(1,'abc',20,'mumbai')";
if(mysqli_query($conn,$sql))
{
	echo "data inserted";
}
else
{
	echo "some problem is there";
}
?>
