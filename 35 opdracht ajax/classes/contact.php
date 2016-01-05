<?php

	
	class Contact{
	
		
		
		public function sendMail($email, $message, $checkbox){
		
			try{
			
				$db = new PDO('mysql:host=localhost;dbname=opdracht-ajax', 'root', 'root');
				
				
					
					
					$header = "Content-Type: text/html; charset=ISO-8859-1\r\n"; // header om html in mail te voegen
					//voeg email toe aan db
					$query = "insert into contact_messages (email, message, time_sent)
								values (:email, :message, :time_sent)";
					$statement = $db->prepare($query);
					$statement->bindValue(":email",$email);
					$statement->bindValue(":message",$message);
					$statement->bindValue(":time_sent",date("Y-m-d H:m"));
					
					//check of checkbox is aangevinkt na het uitvoeren van de query en stuur mail naar afzender
					if($statement->execute() && isset($checkbox)){
						mail($email, "kopie mail", $message, $header);
					}
					
					mail($email, "i can has mail?", $message, $header);
					
					
				
				
			}
			catch(PDOException $e){
					
				return "verbinden mislukt: " . $e->getMessage();
			}
			
		}
		
	}
?>