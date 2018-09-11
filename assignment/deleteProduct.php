<?php
$id=$_GET['id'];
require "Dao/productDao.php";
$cd=new productDao();
$var=$cd->deleteProduct($id);
if($var)
{
	?>
	<script>
		alert("Product Deleted");
		document.location.href="manageProduct.php";
	</script>
<?php
}
else{
	echo "some problem is there";
}
?>
