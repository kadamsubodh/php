<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION['name']="subodh";
$_SESSION["age"]=24;
echo "session variables are set!!";
?>
<a href="getSession.php"> Get Session Variables</a>
</body>
</html>
