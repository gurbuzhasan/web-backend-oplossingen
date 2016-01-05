<?php
	
	session_start();
	
	
	
	$cookieExplode = explode(",", $_COOKIE["login"]);
	$showContent = false;
//	echo "<pre>";
//	print_r($cookieExplode);
//	echo "</pre>";
	
	try{
		$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root');
		$message = "verbonden";
		
		
		
		$query = "SELECT salt FROM `users` where email = :email";
		$statement = $db->prepare($query);
		$statement->bindValue(":email",$cookieExplode[0]);
		
		$statement->execute();
		
		$fetchArray = array();
		
		while( $row = $statement->fetch(PDO::FETCH_ASSOC)){
			$fetchArray[] = $row;
		}
		
//		echo "<pre>";
//		print_r($fetchArray);
//		echo "</pre>";
		
		$salt = $fetchArray[0]["salt"];
		$hashFromDb = hash('sha512', $cookieExplode[0] . $salt);
		if($hashFromDb === $cookieExplode[1]){
			$showContent = true;
		}else{
			unset($_COOKIE["login"]);
		}
		
	}catch(PDOException $e){
			
		$message = "verbinden mislukt: " . $e.getMessage();
	}
	
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

<h1>Dashboard</h1>

	<a href="gegevens-wijzigen-form.php"> > gegevens wijzigen</a>
	<br/>
	
	<?php if($showContent): ?>
		<a href="logout.php">uitloggen</a>
    <?php endif ?>
	
	
</body>
</html>
