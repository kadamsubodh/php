
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
public function deleteCategory($id)
{
	global $conn;
	$result=$conn->prepare("delete from category where cat_id=?");
	$result->bind_param("i",$id);
	if($result->execute())
	{
		return true;
	}
	else
	{
		echo "Some problem is there";
	}

}
public function selectCategoryById($id)
{
	global $conn;
	$result=$conn->query("select * from category where cat_id=$id");
	if($result>0)
	{
		return $result;
	}
	else{
		echo "some problem is there";
	}
}
public function updateCategoryById(&$cp,$id)
{
	global $conn;
	$stmt=$conn->prepare("update category set cat_name=? where cat_id=?");
	$stmt->bind_param("si",$cp->getName(),$id);
	if($stmt->execute())
	{
		return true;
	}
	else
	{
		echo "some problem is there";
	}
}

}

?>
