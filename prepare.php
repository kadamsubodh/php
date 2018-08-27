<?php
$servername="localhost";
$username="root";
$password="root";
$db="demophp";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	die("Error in connection".$conn->connect_error);
}
$stmt=$conn->prepare("insert into test value(?,?,?,?)");
$stmt->bind_param("isis",$id,$firstname,$age,$city);

$id=2;
$firstname="john";
$age=24;
$city="pune";
$stmt->execute();
$id=3;
$firstname="johdn";
$age=24;
$city="pune1";
$stmt->execute();
$conn->close();
echo "data inserted";
?>
