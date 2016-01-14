<?php
	session_start();
	
	
	try{
	
		$db = new PDO('mysql:host=localhost;dbname=opdracht mod rewrite blog', 'root', 'root');

				
		if(isset($_POST["submit"])){
			
			$query = 'insert into artikels (titel, text, kernwoorden, datum)
						values (:titel, :text, :kernwoorden, :datum ) ';
			$statement = $db->prepare( $query );
			$statement->bindValue(":titel", $_POST["titel"]);
			$statement->bindValue(":text", $_POST["text"]);
			$statement->bindValue(":kernwoorden", $_POST["kernwoorden"]);
			$statement->bindValue(":datum", $_POST["datum"]);
			
			if($statement->execute()){
				$_SESSION['notification'] = "gelukt!";
				header("location:artikel-toevoegen-form.php");
			}
			else{
				$_SESSION['notification'] = "niet gelukt!";
				header("location:artikel-toevoegen-form.php");
			}
			
			
				
		}		
		
		


	}
	catch(PDOException $e){
			
		$_SESSION['notification'] = "verbinden mislukt: " . $e->getMessage();
		header("location:artikel-toevoegen-form.php");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
?>