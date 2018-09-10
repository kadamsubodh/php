<?php include 'header.php';?>

<div class="container-fluid name text-center">	
<span class="text12"> Manage Products </span>
</div>
<div class="row wrapper">
<form name="frm" action="deleteMultiProduct.php" method="POST" id="frm">
<div class="container-fluid">
	<div class="container Manage">
		<div class="row right1">
		<div class="manageBtn">
			<ul>
				<!-- <li>
					<a href="main.php">Create Category</a>
				</li>
				<li>
					<a href="deleteMultiCategory.php" onclick="document.getElementById('frm').submit(); return true;">Delete</a>
				</li> -->
				<li>
					<a href="product.php">Add New Product</a>
				</li>
				<li>
					<input type="submit" value="Delete" class="delBtn"/>
				</li>

			</ul>
			</div>
		</div>
		<div class="tableDiv" id="tableDiv" style="overflow-x: auto">loading...</div>
		<?php
			require "Dao/db.php";
			global $conn;
			$limit=4;
			$sql=$conn->query("select * from product");
			while($row=$sql->fetch_assoc())
			{
			$i+=1;
			}
			$count=$i;
			$total_pages=ceil($count/$limit);
		?>
		<div align="center">
<ul class='pagination text-center' id="pagination">
<?php if(!empty($total_pages)):for($i=1; $i<=$total_pages; $i++):  
 if($i == 1):?>
            <li class='active'  id="<?php echo $i;?>"><a href='viewProduct.php?page=<?php echo $i;?>'><?php echo $i;?></a></li> 
 <?php else:?>
 <li id="<?php echo $i;?>"><a href='viewProduct.php?page=<?php echo $i;?>'><?php echo $i;?></a></li>
 <?php endif;?> 
<?php endfor;endif;?> 
</ul> 
</div>
</div>
		</div>

	</div>
</form>
</div>
<script>
$(document).ready(function() {
$("#tableDiv").load("viewProduct.php?page=1");
    $("#pagination li").on('click',function(e){
 e.preventDefault();
 $("#tableDiv").html('loading...');
 $("#pagination li").removeClass('active');
 $(this).addClass('active');
        var pageNum = this.id;
        $("#tableDiv").load("viewProduct.php?page=" + pageNum);
    });
    });
</script>
	<?php include "footer1.php";?>