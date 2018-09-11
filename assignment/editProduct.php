
<?php include 'header.php';
include "Dao/categoryDao.php";
		include "Dao/productDao.php"
?>
<div class="container-fluid name text-center">	
<span class="text12"> ADD PRODUCT </span>
</div>
<div class="container-fluid marginTopBottom">
	<?php
		$pid=$_GET['id'];
		$_SESSION['pid']=$pid;
		$pd=new productDao();
		$var=$pd->selectProductById($pid);
		if($var->num_rows>0)
		{

			while($row=$var->fetch_assoc())
			{
				$catid=$row['cat_id'];
				$imagepath=$row['p_path'];
				$_SESSION['path']=$imagepath;
				$path="uploads/".$imagepath;
				$cd=new categoryDao();
								$v=$cd->selectCategoryById($catid);
								if($v>0)
								{
									while($row1=$v->fetch_assoc()){
										$catname=$row1['cat_name'];	
									}
								}
	?>
<form action="updateProduct.php" method="POST" id="frm1" name="frm" enctype="multipart/form-data">
		<div class="row wrapper border1 paddingTopBottom">
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 ">Product Name</span>
				</div>
			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<input type="text" class="categoryNameBox1 left form-control b" name="productName" id="productName" placeholder="Product Name" value="<?php echo $row['p_name'];?>"/><span class="error" id='nameError'></span>
				</div>
			</div>
		
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Product Price</span>
				</div>
			</div>
			<div class="row leftMargin">	
					<div class="col-md-6 form-group">
						<input type="text" class="categoryNameBox1 left form-control b" name="productPrice" id="productPrice" placeholder="Product Price" value="<?php echo $row['p_price'];?>"/><span class="error" id='priceError'></span>
					</div>
			</div>
		
			<div class="row leftMargin">
					<div class="col-md-6 form-group">
						<span class="categoryText1 left">Upload Image</span>
					</div>
			</div>
			<div class="row leftMargin">	
				<div class="col-md-6 form-group ">
					<input type="file" class="categoryNameBox1 left form-control red" name="file" id="file"/>
					<span class="error" id='imgError'></span>
				</div>
				<div class="col-md-6">
					<img src="<?php echo $path;?>" class="viewImage" id="product_image">
				</div>
			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Select Category</span>
					</div>
				</div>
			<div class="row leftMargin">	
				<div class="col-md-6 form-group styled-select">
							
					<select class="categoryNameBox1 left form-control " name="select" id="select">
						<option value="<?php echo $catid; ?>"><?php echo $catname;?></option>
						<option value="">---select---</option>
							<?php
								$result=$cd->listCategory();
								if($result->num_rows>0)
								{
									while($row2=$result->fetch_assoc())
									{

								?>
								<option value="<?php echo $row2['cat_id'];?>"><?php echo $row2['cat_name'];?></option>
							<?php
									}
								}
							?>
					</select>
							
				</div>
				<span class="error" id='selectError'></span>	

			</div>
		<div class="row center hr">
			<div class="categoryBtn col-md-12 ">
				<input type="submit" class="btn btn-success btn-lg" value="submit" id="submit1"/>
				<input type="button" class="btn btn-success btn-lg" value="cancel" id="cancel" onclick="location.href='manageProduct.php'"/>
			</div>
		</div>
	</div>

	</form>
	<?php
}
}
?>

	</div>
	<?php include "footer1.php";?>
