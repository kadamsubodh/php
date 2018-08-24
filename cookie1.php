<!DOCTYPE html>
<?php
$cookie_name="name";
$cookie_value="subodh";
setcookie($cookie_name, $cookie_value,time()+(86400 * 30), "/");
?>
<html>
<head>
	<title> cookie
	</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
	echo "cookie is not set";
}
else
{
	echo "cookie name is <b>".$cookie_name ."</b></br>"
	echo "cookie value is <b>".$_COOKIE[$cookie_name]."</b></br>"
}
?>
</body>
</html>