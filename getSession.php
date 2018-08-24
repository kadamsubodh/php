<?php
session_start();
?>
<html>
<body>
<?php
echo "name from sesion is: ".$_SESSION['name']."<br>";
echo "age from session is: ".$_SESSION['age'];
$_SESSION['name']="abc";
print_r($_SESSION);
?>
</body>
</html>