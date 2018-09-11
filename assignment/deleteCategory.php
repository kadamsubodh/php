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
	?>
	<script>
		alert("This action cannot be performed!! Make sure that category is empty(no product under this category) before deleting");
		document.location.href="manageCategory.php";
	</script>
	<?php

}
?>

