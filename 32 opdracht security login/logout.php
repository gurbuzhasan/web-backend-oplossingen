<?php
	
	session_start();
	$_SESSION["notification"]["message"] = "u bent uitgelogd.";
	setcookie ("login", false);
	header('location:login-form.php');
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

</body>
</html>
