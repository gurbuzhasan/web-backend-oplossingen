<?php
	session_start();
	
	
	try{
	
		$db = new PDO('mysql:host=localhost;dbname=opdracht-mail', 'root', 'root');
		
		//check bij submit of velden leeg zijn, zoniet stuur error
		if(isset($_POST["submit"]) && $_POST["email"] != "" && $_POST["message"] != "" ){
			
			$admin = $_POST["email"];
			$header = "Content-Type: text/html; charset=ISO-8859-1\r\n"; // header om html in mail te voegen
			//voeg email toe aan db
			$query = "insert into contact_messages (email, message, time_sent)
						values (:email, :message, :time_sent)";
			$statement = $db->prepare($query);
			$statement->bindValue(":email",$_POST["email"]);
			$statement->bindValue(":message",$_POST["message"]);
			$statement->bindValue(":time_sent",date("Y-m-d H:m"));
			
			//check of checkbox is aangevinkt na het uitvoeren van de query en stuur mail naar afzender
			if($statement->execute() && isset($_POST["checkbox"])){
				mail($admin, "kopie mail", $_POST["message"], $header);
			}
			
			mail($admin, "i can has mail?", $_POST["message"], $header);
			
			$_SESSION["error"] = "";
			$_SESSION["succes"] = "mail verstuurd!";
			$_SESSION["email"] = "";
			$_SESSION["message"] = "";
			header("location:contact-form.php");
			
		}else{
			$_SESSION["succes"] = "";
			$_SESSION["email"] = $_POST["email"];
			$_SESSION["message"] = $_POST["message"];
			$_SESSION["error"] = "vul alle velden in pls";
			header("location:contact-form.php");
			
		}
		
	}
	catch(PDOException $e){
			
		$_SESSION["error"] = "verbinden mislukt: " . $e->getMessage();
	}
		
	
?>