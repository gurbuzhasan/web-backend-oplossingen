<?php

	session_start();
	$isValid = false;

	try{
		if( isset($_POST["submit"]) ) {

			if($_POST['code'] !== ""){
				
				if(strlen($_POST['code']) !== 8)	{
					
					throw new Exception ("VALIDATION-CODE-LENGTH");
					
				}else{
					
					$isValid = true;
					
				}
				
			}else{
				
				throw new Exception ("SUBMIT-ERROR");
				
			}
		}
	
	}
	catch(Exception $e){
		
		$messageCode = $e->getMessage();
		$message;
		$createMessage = false;
		
		switch($messageCode){
			case "SUBMIT-ERROR": 
				$message['type'] = "error";
				$message["text"] = "Er werd met het formulier geknoeid";
				break;
			
			case "VALIDATION-CODE-LENGTH": 
				$message['type'] = "error";
				$message["text"] = "De kortingscode heeft niet de juiste lengte";
				$createMessage = true;
				break;
		}
		logToFile($message);
		if($createMessage){
			createMessage($message);
		}
	}
	
	function logToFile($msg){
		file_put_contents( "log.txt", "[" . date("h:i:s d:m:Y") . " - " . $_SERVER['REMOTE_ADDR'] . " - type: [" . $msg["type"] . "] " . $msg["text"] . "\r\n", FILE_APPEND);
	}
	
	function createMessage($message){
		$_SESSION["message"]["type"] = $message["type"];
		$_SESSION["message"]["message"] = $message["text"];
	}
	
	function showMessage(){
		if(isset($_SESSION["message"]["message"])){
			$message = $_SESSION["message"]["message"];
			unset($_SESSION["message"]["message"]);
			return $message;
		}else{
			return false;
		}
	}
	
	$errorMessage = showMessage();
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Geef uw kortingscode op</h1>

<form action="opdracht error handling.php" method="post">

<?= ( $errorMessage ) ? $errorMessage : "" ?><br/>

<?php if(!$isValid): ?>
	<label name="kortingscode">kortingscode</label>
	<input type="text" name="code"/>
	<input type="submit" name="submit"/>
<?php else: ?>

	<p>korting toegepast!</p>

<?php endif ?>
</form>
    


</body>
</html>

