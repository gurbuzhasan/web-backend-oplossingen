<?php
	session_start();
	$_SESSION["user"] = array();
	
	function generatePassword(){
		$word = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'), array('&', '€', '#', '@', '+', '*'));
	    shuffle($word);
	    return substr(implode($word), 0, 10);
	}
	
	
	if(isset($_POST["generatePassword"])){
		$_SESSION["user"]["password"] = generatePassword();
		$_SESSION["user"]["email"] = $_POST["email"];
		$_SESSION["generate"] = true;
		header("Location:registratie-form.php");
	}
	
	try{
	
		$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root');
		$message = "verbonden";
		
		
		
		if(isset($_POST["registreer"])){
			$_SESSION["user"]["email"] = $_POST["email"];
			$_SESSION["user"]["password"] = $_POST["password"];
			
			
			
			if (filter_var($_SESSION["user"]["email"], FILTER_VALIDATE_EMAIL)) {
			
				unset($_SESSION["notification"]["type"]);
				unset($_SESSION["notification"]["message"]);
				
				
				$query = "SELECT `email` FROM `users` WHERE `email` = :email";
				$statement = $db->prepare( $query );
				$statement->bindValue(":email", $_SESSION["user"]["email"]);
				
				$statement->execute();

				
				
				if( $statement->rowCount() >0){
					$_SESSION["notification"]["type"] = "error";
				    $_SESSION["notification"]["message"] =  "Email already exists!";
				}else{
					
					$salt = uniqid(mt_rand(), true);
					$saltedPass = $_SESSION["user"]["password"].$salt;
					$hashedPass = hash('sha512', $saltedPass);
					
					$query2 = 'insert into users (email, salt, hashed_password, last_login_time)
						values (:email, :salt, :hashed_password, now()) ';
						
					$statement2 = $db->prepare( $query2 );
					$statement2->bindValue(":email", $_SESSION["user"]["email"]);
					$statement2->bindValue(":salt", $salt);
					$statement2->bindValue(":hashed_password", $hashedPass);
					
					$statement2->execute();
					
					$saltedEmail = $_SESSION["user"]["email"].$salt;
					$hashedEmail = hash('sha512', $saltedEmail);
					$cookieValue = $_SESSION["user"]["email"] . "," . $hashedEmail;
					
					setcookie("login", $cookieValue, time()+ 2592000);
					
				}
			
			
			}else{
				$_SESSION["notification"]["type"] = "error";
				$_SESSION["notification"]["message"] = "invalid email";
			}
			header("Location:registratie-form.php");
		}
	}
	catch(PDOException $e){
			
		$message = "verbinden mislukt: " . $e.getMessage();
	}
	
	
	
	
	
	
	
	
	
	
?>