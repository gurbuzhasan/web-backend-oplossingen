<?php
	$password = "hello";
	$username = "world";
	$message = "";

	if ( isset( $_POST["submit"] ) ) 
	{
		if ( $_POST["username"] == $username && $_POST["password"] == $password ) 
		{
			$message = "Welkom!";
		}
		else 
		{
			$message = "Er ging iets mis bij het inloggen, probeer opnieuw";
		}
	}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>

<h1>Login</h1>
<form action="opdracht post.php" method="post">
	<label>username</label>
	<input type="text" name="username" id="username"/><br/>
	<label>password</label>
	<input type="password" name="password" id="password"/><br/>
	<input type="submit" name="submit" value="submit">
	<?= $message ?>
</form>

</body>
</html>