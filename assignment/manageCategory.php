
<?php include 'header.php';?>

<div class="container-fluid name text-center">	
<span class="text1"> Manage Category </span>
</div>
<div class="container-fluid">
	<div class="container Manage">
		<div class="row right1">
		<div class="manageBtn">
			<ul>
				<li>
					<a href="main.php">Create Category</a>
				</li>
				<li>
					<a href="deleteCategory.php">Delete</a>
				</li>
			</ul>
			</div>
		</div>
			<div class="tableDiv">
				<?php
					require 'Dao/categoryDao.php';
					$var=new categoryDao();
					$result=$var->listCategory();
				?>
				<table class="table table-bordered table-hover">
					<tr>
						<th width='10%'><input type="checkbox"/></th>
						<th width='60%'>NAME</th>
						<th>Action</th>
					</tr>
					<?php
					if($result->num_rows>0)
					{
						while($row=$result->fetch_assoc())
						{
						?>
					<tr>
						<td><input type="checkbox" value='<?php echo $row['cat_id'];?>'/></td>
						<td><?php echo $row['cat_name'];?></td>
						<td>
							<div class="row" style="margin-left:0px">
								<a href="deleteCategory.php?id=<?php echo $row['cat_id'];?>">
									<div class="delicon">
										<img src="images/delete_icon.png">
									</div>
								</a>
							
								<a href="editCategory.php?id=<?php echo $row['cat_id'];?>">
									<div class="editicon">
										<img src="images/edit_icon.png">
									</div>
								</a>
							
						</div>
							

							</td>
					</tr>
					<?php
				}
			}
			?>
				</table>
			</div>
			
		</div>

	</div>
	<?php include "footer.php";?>
