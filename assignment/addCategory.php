<?php
require 'Popo/categoryPopo.php';
require 'Dao/db.php';
require 'Dao/categoryDao.php';
$name=$_POST["categoryName"];
$category=new categoryP();
$category->setName($name);
//print_r($category);
// include 'categoryDao.php';
$var=new categoryDao();
$result=$var->addCategory($category);
if($result>0)
{
?>
<script>
	alert("New Category Added");
	document.location.href="manageCategory.php";
</script>
<?php
}
else{
	echo "some problem is there";
}

?>