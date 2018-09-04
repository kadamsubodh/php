<?php
require "Popo/productPopo.php";
require "Dao/db.php";
echo "db";
require "Dao/productDao.php";
echo "dao";
$pname=$_POST['productName'];
$pprice=$_POST['productPrice'];;
$catid=$_POST['select'];
$filename=$_FILES['file']['name'];
$file="NA";
if($filename!="")
{
$filesize=$_FILES['file']['size'];
  $filetype=$_FILES['file']['type'];
  $temppath=$_FILES['file']['tmp_name'];
  $fileExtention=strtolower(end(explode(".",$filename)));
  $extentions=array("jpeg","jpg","png");
  $errors=[];
  $destination=getcwd()."/uploads/".basename($filename);
   move_uploaded_file($temppath, $destination);
   $file=$filename;
   echo "moved";
}
$pp=new productPopo();
$pp->setCatid($catid);
$pp->setPname($pname);
$pp->setPprice($pprice);
$pp->setPpath($file);
print_r($pp);
$pd=new productDao();

$var=$pd->addProduct($pp);
echo($var);
if($var>0)
{
	?>
	<script>
		alert("product added");
		document.location.href="product.php";
	</script>
	<?
	else{
		echo "some problem is there";
	}
}

?>

