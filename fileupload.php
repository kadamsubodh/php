<html>
<head>
	<title> file upload</title>
</head>
<body>
	<form name="frm" action="fileHandler.php" method="post" enctype="multipart/form-data">
		name:<input type="text" value="" name="name"/></br>
		age:<input type="text" value="" name="age"/></br>
	select file:	<input type="file" name="f"/>
	</br>
	<input type="submit" name="submit" value="upload"/>
</form>
</body>
</html>