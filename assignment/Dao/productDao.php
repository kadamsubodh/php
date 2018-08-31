<?php
require "Dao/db.php";
class productDao{
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
}
?>