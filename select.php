<?php
$servername="localhost";
$username="root";
$password="root";
$db="demophp";
$conn=new mysqli($servername,$username,$password,$db);
if($conn->connect_error)
{
	die("connecttion error ". $conn->connect_error);

}
$sql="select * from test";
$result=$conn->query($sql);
if($result->num_rows>0)
{
?>
	<table border="2px" border-colapse="true">
	<tr>
	<th>id</th>
	<th>name</th>
	<th>age</th>
	<th>city</th>
	</tr>
<?php
	while($row=$result->fetch_assoc())
	{
?>
	<tr>
	<td><?php echo $row["id"];?></td>
	<td><?php echo $row["name"];?></td>
	<td><?php echo $row["age"];?></td>
	<td><?php echo $row["city"];?></td>
	</tr>

<?php
	}
?>
</table>
<?php
}
?>