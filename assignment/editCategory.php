<?php include 'header.php';

require "Dao/categoryDao.php";
$id=$_GET['id'];

$_SESSION['id']=$id;
$cd=new categoryDao();
$var=$cd->selectCategoryById($id);
?>
<div class="container-fluid name text-center">	
<span class="text12"> Edit Category </span>
</div>
<?php 
if($var->num_rows>0)
{

	while($row=$var->fetch_assoc())
	{
		?>
		<div class="container-fluid marginTopBottom">
		<form action="updateCategory.php" method="POST" name="frm">
			<div class="row wrapper border1 paddingTopBottom">
				<div class="row leftMargin">
					<div class="col-md-6 form-group">
					<span class="categoryText1 left">Category Name</span>
					</div>
				</div>
				<div class="row leftMargin">	
					<div class="col-md-6 form-group">
						<input type="text" class=" form-control" name="categoryName" id="categoryName" value="<?php echo $row['cat_name'];?>" placeholder="Category Name"/>
					</div>
				</div>
	
				<div class="row center hr">
					<div class="categoryBtn col-md-12 ">
						<input type="submit" class="btn btn-success btn-lg" value="submit" id="submit"/>
					</div>
				</div>
			</div>
		</form>
	</div>
<?php
}
}
?>
<?php include "footer1.php";?>