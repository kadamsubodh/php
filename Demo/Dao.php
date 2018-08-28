<?php
require "db.php";
class Dao{
public function addUser(&$user)
{
	global $conn;

	$stmt=$conn->prepare("insert into test(name, age, city) values(?,?,?)");
	echo "hello";
	$stmt->bind_param("sis",$user->getName(),$user->getAge(),$user->getCity());

	if($stmt->execute())
	{
	echo "data inserted succesfully";
	$stmt->close();
	}
	else
	{
	echo "some problem is there";
	}
}
}
?>
