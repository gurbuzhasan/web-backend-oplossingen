<?php
	$text = file_get_contents("file.txt");
//	echo $text;
	$textArray[] = explode(",", $text);
	$loggedIn = false;
	$message = "";
	

 	if(isset($_POST["submit"])){
	
		if($_POST["username"] === $textArray[0][0] && $_POST["password"] === $textArray[0][1]){
			if(isset($_POST["checked"])){
				setcookie( 'loggedin', TRUE, time() + 2592000 );
				header( 'location: opdracht cookies2.php' );
			}
			$loggedIn=true;
			
		}else 
		{
			$message = 'Paswoord niet correct. Probeer opnieuw.';
		}
	
	}
	
	if ( isset( $_COOKIE['loggedin'] ) ) 
	{
		$loggedIn	=	true;
	}
	
	
	if (isset($_GET['cookie'])) {
	
		if ($_GET['cookie'] == 'delete') {
		
			
			setcookie('loggedin',false );
			
			header('location: opdracht cookies2.php');
		}
	}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
<!--	<pre><?php print_r($textArray); ?></pre> -->

	<?php if($loggedIn): ?>
		<h1>Dashboard</h1>
		<p>U bent ingelogd.</p>
		<a href="opdracht cookies2.php?cookie=delete">Uitloggen</a>


	
	<?php else: ?>
	<form action="opdracht cookies2.php" method="post">
	
				
		<h1>Inloggen</h1>
			
			<?php if ( $message ): ?>
					<p><?php echo $message ?></p>
				<?php endif ?>
					
		<label>username</label>
		<input type="text" name="username" value=""/>
		<br/>
		<label>password</label>
		<input type="password" name="password" value=""/>
		<br/>
		<input type="checkbox" name="checked" value=""/>mij onthouden
		<br/>
		<input type="submit" name="submit"/>

	</form>
	<?php endif ?>
</body>
</html>