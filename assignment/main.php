
<?php include "header.php";?>
<div class="container-fluid name text-center">	
<span class="text1"> Create Category </span>
</div>
<form action="addCategory.php" method="POST" name="frm">
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
							<input type="text" class="categoryNameBox1 left form-control" name="categoryName" id="categoryName" placeholder="Category Name"/>
						</div>
				</div>
			</div>
		</div>
		<div class="row center hr">
		<div class="categoryBtn col-md-12 ">
			<input type="submit" class="btn btn-success btn-lg btn1" value="submit" id="submit"/>
		</div>
	</div>
	</div>
</div>
</form>
	<?php include "footer.php";?>
