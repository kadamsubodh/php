<?php
require "Dao/categoryDao.php";
$cp=new categoryDao();
extract($_POST);
// if(!empty($_POST))
// {
foreach($_POST['check_list'] as $report){
     $var= $cp->deleteCategory($report);
     }
     if($var)
     {
     	?>
     	<script>
     		alert("category deleted");
     		document.location.href="manageCategory.php";
     	</script>
     	<?php
     }
 
 ?>
