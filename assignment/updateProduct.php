<?php
require "Popo/productPopo.php";
require "Dao/db.php";
require "Dao/productDao.php";

session_start();
$pid=$_SESSION['pid'];
$pname=$_POST['productName'];
$pprice=$_POST['productPrice'];;
$catid=$_POST['select'];
$filename=$_FILES['file']['name'];
$file=$_SESSION['path'];

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
  
}
$pp=new productPopo();
$pp->setCatid($catid);
$pp->setPname($pname);
$pp->setPprice($pprice);
$pp->setPpath($file);
$pd=new productDao();

$var=$pd->updateProductById($pp,$pid);

if($var>0)
{
	?>
	<script>
		alert("product updated");
		document.location.href="manageProduct.php";
	</script>
	<?php
}
	else{
		echo "some problem is there";
	}

?>

