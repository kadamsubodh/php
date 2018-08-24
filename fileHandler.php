<?php
   $filename=$_FILES['f']['name'];
  $filesize=$_FILES['f']['size'];
  $filetype=$_FILES['f']['type'];
  $temppath=$_FILES['f']['tmp_name'];
  $fileExtention=strtolower(end(explode(".",$filename)));
  $extentions=array("jpeg","jpg","png");
  $errors=[];
  $destination=getcwd()."/uploads/".basename($filename);
  
  echo "File Name is ".$filename."<br>";
  echo "File Size is ".$filesize."<br>";
  echo "File Type is ".$filetype."<br>";
  echo "Temparary path is ".$temppath."<br>";
  echo "destination path is ".$destination."<br>";
  echo $fileExtention;
  echo $_POST['name'];
  echo $_POST['age'];
  
  if(isset($_POST['submit']))
	{
	  	if(! in_array($fileExtention, $extentions))
	  	{
	  		$errors[]="Invalid Image Type. Only JPEG, JPG, PNG images are allowed";
	  	}
	  	if($filesize > 2000000)
	  	{ 
	  		$errors[] = "Image is to large. image size must less than 2MB";
	  	}
	  	if(empty($errors))
	  	{
	  		$move = move_uploaded_file($temppath, $destination);
	  		if($move)
	  		{
	  			echo "File uploaded successfully";
	  		}
	  		else
	  			{
	  				echo "some problem is there";
	  			}
	  	}
	  	else
	  	{
	  		foreach ($errors as $err) 
	  		{
	  			echo "Error: ".$err."\n";
	  		}
	  	}
	}
  	

?>