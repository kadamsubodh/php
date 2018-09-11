<script>
	$(document).ready(function(){
$("#selectall").click(function(){
        //alert("just for check");
        if(this.checked){
            $('.checkboxall').each(function(){
                this.checked = true;
            })
        }else{
            $('.checkboxall').each(function(){
                this.checked = false;
            })
        }
    });
});
$(document).ready(function(){
$(".checkboxall").click(function(){
	var v1=$('.checkboxall').length;
	var check=$('.checkboxall').filter(':checked').length;
	if(check==v1)
	{

		$('#selectall').prop("checked", true);
	}
	else{
		$('#selectall').prop("checked", false);
	}

});
});
	</script>
	<?php
include('Dao/db.php');
include('Dao/categoryDao.php');
global $conn;

 
$limit = 4;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
$rs_result = $conn->query("SELECT * FROM product ORDER BY cat_id ASC LIMIT $start_from, $limit");  
?>
<table class="table table-bordered table-hover" >
					<tr>
						<th width='10%'><input type="checkbox" id="selectall"/></th>
						<th>NAME</th>
						<th>Product Image</th>
						<th>Product Price</th>
						<th>Product Category</th>
						<th>Action</th>
					</tr>
					<?php
					if($rs_result->num_rows>0)
					{
						while($row=$rs_result->fetch_assoc())
						{ 	$catid=$row['cat_id'];
							$path="uploads/".$row['p_path'];
								$cd=new categoryDao();
								$var=$cd->selectCategoryById($catid);
								if($var>0)
								{
									while($row1=$var->fetch_assoc()){
										$catname=$row1['cat_name'];	
									}
								}
						?>
					<tr>
						<td><input type="checkbox" value='<?php echo $row['p_id'];?>' class="checkboxall" name="check_list[]"/></td>
						<td><?php echo $row['p_name'];?></td>
						<td><div class="viewImage"><img src="<?php echo $path;?>" class="viewImage"></div></td>
						<td style="text-align:right">Rs <?php echo $row['p_price'];?></td>
						<td><?php echo $catname;?></td>
						<td>
							<div class="row" style="margin-left:0px" id="<?php echo $row['p_id'];?>">
								<a href="deleteProduct.php?id=<?php echo $row['p_id'];?>" onclick="return confirm('Are you sure want to delete this?');">
									<div class="delicon">
										<img src="images/delete_icon.png">
									</div>
								</a>
							
								<a href="editProduct.php?id=<?php echo $row['p_id'];?>" onclick="return confirm('Are sure want to edit this?');">
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