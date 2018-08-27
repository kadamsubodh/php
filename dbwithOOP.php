<?php
$servername="localhost";
$username="root";
$password="root";

$conn=new mysqli($servername, $username, $password);
if($con->connect_error) 
{
	die("conection failed".$conn->connect_error);

}
else
{
	echo "connection succesfull";
}
?>