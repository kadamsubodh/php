<?php
	require 'Popo/categoryPopo.php';
	require 'Dao/db.php';
	require "Dao/categoryDao.php";
	$name=$_POST['categoryName'];
	session_start();
	$id=$_SESSION['id'];
	$cp=new categoryP();
	$cd=new categoryDao();
	$cp->setName($name);
	$var=$cd->updateCategoryById($cp,$id);
	if($var>0)
	{
	?>
	<script>
		alert("Category Updated");
		document.location.href="manageCategory.php";
	</script>
	<?php 
	}
	else
	{
		echo "some problem is there";
	}
?>