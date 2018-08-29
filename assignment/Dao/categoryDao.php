
<?php
require 'Dao/db.php';
class categoryDao{
// $abc="electronics";
public function addCategory(&$category)
{
	global $conn;

	$stmt=$conn->prepare("insert into category(cat_name) values(?)");
	$stmt->bind_param("s",$category->getName());
	if($stmt->execute())
	{
	return true;
	}
	else
	{
	echo "some problem is there";
	}
}
public function listCategory()
{
	global $conn;
	$result=$conn->query("select * from category");
	if($result>0)
	{
		return $result;
	}
	else{
		echo "some problem is there";
	}

}
// public function deleteCategory($id)
// {
// 	global conn;
// 	$result=$conn->prepare("delete from category where cat_id=?");
// 	$result->bind_param("i",$id);
// 	if($result->execute())
// 	{
// 		return true;
// 	}
// 	else
// 	{
// 		echo "Some problem is there";
// 	}

// }
}

?>
