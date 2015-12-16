<?php
	session_start();
	
	
	try{
	
		$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root');
		$message = "verbonden";
		
		if(isset($_POST["login"])){
		
			$_SESSION["user"]["email"] = $_POST["email"];
			$_SESSION["user"]["password"] = $_POST["password"];
			
			$query = "select email, salt, hashed_password from users where email = :email";
			
			$statement = $db->prepare($query);
			$statement->bindValue(":email", $_SESSION["user"]["email"]);
			
			$statement->execute();
			
			if( $statement->rowCount() >0 ){
			
				$fetchArray = array();
				
				while( $row = $statement->fetch(PDO::FETCH_ASSOC)){
					$fetchArray[] = $row;
				}
				
				$salt = $fetchArray[0]["salt"];
				$saltedPass = $_SESSION["user"]["password"] . $salt;
				$hashedPass = hash("sha512", $saltedPass);
				
				if($hashedPass === $fetchArray[0]["hashed_password"]){
				
					$saltedEmail = $_SESSION["user"]["email"].$salt;
					$hashedEmail = hash('sha512', $saltedEmail);
					$cookieValue = $_SESSION["user"]["email"] . "," . $hashedEmail;
					
					setcookie("login", $cookieValue, time()+ 2592000);
					
					header("location:dashboard.php");
					
				}else{
					$_SESSION["notification"]["type"] = "error";
					$_SESSION["notification"]["message"] =  "wrong password!";
				}
				
			}else{
				$_SESSION["notification"]["type"] = "error";
				$_SESSION["notification"]["message"] =  "Email doesn't exist!";
				
				header("location:login-form.php");
			}
			
		}
		
		
	}
	catch(PDOException $e){
			
		$message = "verbinden mislukt: " . $e.getMessage();
	}
	
	
	
	
	
	
	
	
	
	
?>