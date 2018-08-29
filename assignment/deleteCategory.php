<?php
$id=$_GET['id'];
require "Dao/categoryDao.php";
$cd=new categoryDao();
$var=$cd->deleteCategory($id);
if($var)
{
	?>
	<script>
		alert("Category Deleted");
		document.location.href="manageCategory.php";
	</script>
<?php
}
else{
	echo "some problem is there";
}
?>

