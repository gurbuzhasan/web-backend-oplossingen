<?php
	
	session_start();

	$cookieExplode = explode(",", $_COOKIE["login"]);
		$showContent = false;
	//	echo "<pre>";
	//	print_r($cookieExplode);
	//	echo "</pre>";
	
	
	
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>
	<a href="dashboard.php">terug naar dashboard</a>


	<h1>gegevens wijzigen</h1>
		<p class="error">
			<style>
				p.error {color:red;}
			</style>
			<?php if(isset($_SESSION["message"])): ?>
			<?= $_SESSION["message"] ?>
			<?php endif ?>
			
		</p>

		<h2>Profielfoto</h2>

		<img src="<?php echo (isset($_SESSION["picture"]) ? "img/" . $_SESSION["picture"] : "img/placeholder.jpg") ; ?>" width="200px" height="200px" alt="<?= $cookieExplode[0] ?>"/>
		
		
		<form action="gegevens-bewerken.php" method="post" enctype="multipart/form-data">
		
			<input type="file" name="file"/>
			<br/>
			<br/>
			<label>email</label>
			<br/>
			<input type="text" name="email"/ value="<?= $cookieExplode[0] ?>">
			<br/>
			<br/>
			<input type="submit" name="upload"/>
		
		</form>
		
		
		
		
		
		
		
		
		
		
		
		
		
</body>
</html>
