
<?php include 'header.php';?>
<div class="container-fluid name text-center">	
<span class="text12"> ADD PRODUCT </span>
</div>
<div class="container-fluid marginTopBottom">
<form action="addProduct.php" method="POST" id="frm1" name="frm" enctype="multipart/form-data">
		<div class="row wrapper border1 paddingTopBottom">
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 ">Product Name</span>
				</div>
			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<input type="text" class="categoryNameBox1 left form-control b" name="productName" id="productName" placeholder="Product Name"/><span class="error" id='nameError'></span>
				</div>
			</div>
		
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Product Price</span>
				</div>
			</div>
			<div class="row leftMargin">	
					<div class="col-md-6 form-group">
						<input type="text" class="categoryNameBox1 left form-control b" name="productPrice" id="productPrice" placeholder="Product Price"/><span class="error" id='priceError'></span>
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
			</div>
			<div class="row leftMargin">
				<div class="col-md-6 form-group">
					<span class="categoryText1 left">Select Category</span>
					</div>
				</div>
			<div class="row leftMargin">	
				<div class="col-md-6 form-group styled-select">
							
					<select class="categoryNameBox1 left form-control " name="select" id="select">
						<option value="">---select---</option>
							<?php
								require "Dao/categoryDao.php";
								$cd=new categoryDao();
								$result=$cd->listCategory();
								if($result->num_rows>0)
								{
									while($row=$result->fetch_assoc())
									{

								?>
								<option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
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
			</div>
		</div>
	</div>

	</form>

	</div>
	<?php include "footer1.php";?>
