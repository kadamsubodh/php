<?php
require "Dao/productDao.php";
$cp=new productDao();
extract($_POST);
// if(!empty($_POST))
// {
foreach($_POST['check_list'] as $report){
     $var= $cp->deleteProduct($report);
     }
     if($var)
     {
     	?>
     	<script>
     		alert("product deleted");
     		document.location.href="manageProduct.php";
     	</script>
     	<?php
     }
 
 ?>