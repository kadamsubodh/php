
<script src="js/validation.js">
	</script>
	<?php
include('Dao/db.php');
global $conn;

 
$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$rs_result = $conn->query("SELECT * FROM category ORDER BY cat_id ASC LIMIT $start_from, $limit");  
?>
<table class="table table-bordered table-hover">
					<tr>
						<th width='10%'><input type="checkbox" id="selectall"/></th>
						<th width='60%'>NAME</th>
						<th>Action</th>
					</tr>
					<?php
					if($rs_result->num_rows>0)
					{
						while($row=$rs_result->fetch_assoc())
						{
						?>
					<tr>
						<td><input type="checkbox" value='<?php echo $row['cat_id'];?>' class="checkboxall" name="check_list[]"/></td>
						<td><?php echo $row['cat_name'];?></td>
						<td>
							<div class="row" style="margin-left:0px" id="<?php echo $row['cat_id'];?>">
								<a href="deleteCategory.php?id=<?php echo $row['cat_id'];?>" onclick="return confirm('Are you sure want to delete this?');">
									<div class="delicon">
										<img src="images/delete_icon.png">
									</div>
								</a>
							
								<a href="editCategory.php?id=<?php echo $row['cat_id'];?>" onclick="return confirm('Are sure want to edit this?');">
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