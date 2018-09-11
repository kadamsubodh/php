<?php
require "Dao/db.php";
class productDao
{
	public function addProduct(&$pp)
	{
		global $conn;
		$stmt=$conn->prepare("insert into product(cat_id,p_name,p_price,p_path) values(?,?,?,?)");
		$stmt->bind_param("isds",$pp->getCatid(),$pp->getPname(),$pp->getPprice(),$pp->getPpath());
		if($stmt->execute())
		{
			return true;
		}
		else
		{
			echo "some problem is there";
		}
	}
	public function deleteProduct($id)
	{
		global $conn;
		$result=$conn->prepare("delete from product where p_id=?");
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
	public function selectProductById($id)
	{
		global $conn;
		$result=$conn->query("select * from product where p_id=$id");
		if($result>0)
		{
			return $result;
		}
		else{
			echo "some problem is there";
		}
	}
	public function updateProductById(&$pp,$id)
	{
		global $conn;
		$stmt=$conn->prepare("update product set cat_id=?,p_name=?,p_price=?,p_path=? where p_id=?");
		$stmt->bind_param("isdsi",$pp->getCatid(),$pp->getPname(),$pp->getPprice(),$pp->getPpath(),$id);
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