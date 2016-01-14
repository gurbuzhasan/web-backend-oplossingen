<?php
	session_start();
	
	$basePath = "/37 opdracht mod-rewrite blog";
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	
		try{
		
			$db = new PDO('mysql:host=localhost;dbname=opdracht mod rewrite blog', 'root', 'root');

					
			if(isset($_POST["submit"]) ){
				
				$query = 'insert into artikels (titel, text, kernwoorden, datum)
							values (:titel, :text, :kernwoorden, :datum ) ';
				$statement = $db->prepare( $query );
				$statement->bindValue(":titel", $_POST["titel"]);
				$statement->bindValue(":text", $_POST["text"]);
				$statement->bindValue(":kernwoorden", $_POST["kernwoorden"]);
				$statement->bindValue(":datum", $_POST["datum"]);
				
				if($statement->execute()){
					$_SESSION['notification'] = "gelukt!";
					
					
					$ajaxmessage["type"] = "success";
			
					//encoderen naar json zodat het leesbaar is voor de ajaxcall
					$jsonData = json_encode($ajaxmessage);
					echo $jsonData;
					header("location:" . $basePath . "/artikels/toevoegen");
				}
				else{
					$_SESSION['notification'] = "niet gelukt!";
					header("location:" . $basePath . "/artikels/toevoegen");
				}
				
				
					
			}		
			
			

		}
		catch(PDOException $e){
				
			$_SESSION['notification'] = "verbinden mislukt: " . $e->getMessage();
			header("location:artikel-toevoegen-form.php");
		}
	
	
	
	
	
	
	
	
	
	}
	
	
	
?>