<?php
	
	session_start();

try{
	
	
	if(isset($_POST["upload"])){
		
		//controleer file extension en grootte

		
		if ( $_FILES["file"]["type"] == "image/gif"
		|| $_FILES["file"]["type"] == "image/jpeg"
		|| $_FILES["file"]["type"] == "image/png" 
		&& $_FILES["file"]["size"] < 2000000 ){
			
			if ($_FILES["file"]["error"] > 0) 
			{
				// laat message zien bij fout en return naar form
				throw new Exception( "ERROR: " . $_FILES["file"]["error"] );
				header("location:gegevens-wijzigen-form.php");
			}else{
				
				
				
				
				//haal de pathname van het huidige php document op en sla op in constant 'root'
				define("ROOT", dirname(__FILE__));
				
								
					
					//verander naam van file naar date+filenaam+filetype
					$name = $_FILES["file"]["name"]; // return filename EN type
					$_FILES["file"]["name"] = date("Y-m-d") . "_" . $name; // . "." . pathinfo($name, PATHINFO_EXTENSION); ==>functie om filetype te returnen
					
					
				
				if (file_exists(ROOT . "/img/" . $_FILES["file"]["name"])) {
					
					//check of het bestand al bestaat en toon error
					throw new Exception( "bestand bestaat al" );
				}else{
					$_SESSION["message"] = "";

					//verplaats file naar img map
					move_uploaded_file($_FILES["file"]["tmp_name"], (ROOT . "/img/" . $_FILES["file"]["name"]));
					
					try{
						$db = new PDO('mysql:host=localhost;dbname=opdracht-file-upload', 'root', 'root');

						//db updaten
						$query = "update users
									SET email = :email,
									profile_picture = :picture
									where email = :email_original";
						
						
						//huidige email ophalen
						$cookieExplode = explode(",", $_COOKIE["login"]);
						
						$statement = $db->prepare($query);
						$statement->bindValue(":email",$_POST["email"]);
						$statement->bindValue(":picture",$_FILES["file"]["name"]);
						$statement->bindValue(":email_original",$cookieExplode[0]);
						
						$statement->execute();
						
						

						
					}catch(PDOException $e){
						$_SESSION["message"] = "verbinden mislukt: " . $e->getMessage();
					}
					
					$_SESSION["message"] = "gegevens gewijzigd";
					$_SESSION["picture"] = $_FILES["file"]["name"]; //filename in session steken
					header("location:gegevens-wijzigen-form.php");
				}
				
				
			}
			
		}
		else 
		{
			throw new Exception( "wrong filetype" );
		}
		
		
		
		
		
		
		
		
		
		
	}
	
}	
catch( Exception $e )
{

	$_SESSION["message"]  = $e->getMessage();
	header("location:gegevens-wijzigen-form.php");
}
	
	
	
	
	
	
	
	
?>
