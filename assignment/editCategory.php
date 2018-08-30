<?php include 'header.php';

require "Dao/categoryDao.php";
$id=$_GET['id'];

$_SESSION['id']=$id;
$cd=new categoryDao();
$var=$cd->selectCategoryById($id);
?>
<div class="container-fluid name text-center">	
<span class="text1"> Edit Category </span>
</div>
<?php 
if($var->num_rows>0)
{

	while($row=$var->fetch_assoc())
	{
		?>
<form action="updateCategory.php" method="POST" name="frm">
<div class="categoryDiv">
	<div class="c1">
		<div class="container categorySubDiv1">
			<div class="col-md-12">
				<div class="row">
						<div class="col-md-6 form-group">
							<span class="categoryText1 left">Category Name</span>
						</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">	
						<div class="col-ls-6 form-group">
							<input type="text" class="categoryNameBox1 left form-control" name="categoryName" id="categoryName" value="<?php echo $row['cat_name'];?>"/>
						</div>
				</div>
			</div>
		</div>
		<div class="row center hr">
		<div class="categoryBtn col-md-12 ">
			<input type="submit" class="btn btn-success btn-lg btn1" value="submit" id="submit" name="submit"/>
		</div>
	</div>
	</div>
</div>
</form>
<?php
}
}
?>
<?php include "footer.php";?>