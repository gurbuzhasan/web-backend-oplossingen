<?php
	$text = file_get_contents("file.txt");
//	echo $text;
	$textArray = explode(PHP_EOL, $text);
	$loggedIn = false;
	$message = "";
	$username = "";
	
	foreach( $textArray as $split => $id) {
		$textArraySplit[$split] = explode(',', $id);
	}
	

 	if(isset($_POST["submit"])){
	
		for($i=0; $i<count($textArraySplit); $i++){
			
		
			if(in_array($_POST["username"], $textArraySplit[$i]) && in_array($_POST["password"], $textArraySplit[$i])){
				if(isset($_POST["checked"])){
					setcookie( 'loggedin', TRUE, time() + 2592000 );
					header( 'location: opdracht cookies4.php' );
				}
				$loggedIn=true;
				$username = $_POST["username"];
				
			}else 
			{
				$message = 'Paswoord niet correct. Probeer opnieuw.';
			}
		}
	}
	
	if ( isset( $_COOKIE['loggedin'] ) ) 
	{
		$loggedIn	=	true;
	}
	
	
	if (isset($_GET['cookie'])) {
	
		if ($_GET['cookie'] == 'delete') {
		
			
			setcookie('loggedin',false );
			
			header('location: opdracht cookies4.php');
		}
	}
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
<!--	<pre><?php print_r($textArraySplit); ?></pre> -->

	<?php if($loggedIn): ?>
		<h1>Dashboard</h1>
		<p>Hallo <?= $username ?>, fijn dat je er weer bij bent!</p>
		<a href="opdracht cookies4.php?cookie=delete">Uitloggen</a>


	
	<?php else: ?>
	<form action="opdracht cookies4.php" method="post">
	
				
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