<?php

	$message = "";
	
	if(isset($_POST["submit"])){
		try{
			$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
			$message = "verbonden";
			
			
			$query = 'insert into brouwers (brnaam, adres, postcode, gemeente, omzet)
						values (:brnaam, :adres, :postcode, :gemeente, :omzet) ';
				
			$statement = $db->prepare($query);
			$statement->bindValue(":brnaam", $_POST["brnaam"]);
			$statement->bindValue(":adres", $_POST["adres"]);
			$statement->bindValue(":postcode", $_POST["postcode"]);
			$statement->bindValue(":gemeente", $_POST["gemeente"]);
			$statement->bindValue(":omzet", $_POST["omzet"]);
			
			if($statement->execute()){
				
				$message = "succesvol toegevoegd, nummer van brouwerij is " . $db->lastInsertId();
			}else{
				$message = "niet toegevoegd";
			}
			
			
			
		}
		catch(PDOException $e){
			
			$message = "verbinden mislukt: " . $e.getMessage();
		}
	}
	

	
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<h1>Voeg een brouwer toe</h1>

        <form action="opdracht CRUD insert.php" method="post">
            <ul>
                <li>
                    <label for="brouwernaam">Brouwernaam</label>
                    <input type="text" id="brouwernaam" name="brnaam">
                </li>
                <li>
                    <label for="adres">adres</label>
                    <input type="text" id="adres" name="adres">
                </li>
                <li>
                    <label for="postcode">postcode</label>
                    <input type="text" id="postcode" name="postcode">
                </li>
                <li>
                    <label for="gemeente">gemeente</label>
                    <input type="text" id="gemeente" name="gemeente">
                </li>
                <li>
                    <label for="omzet">omzet</label>
                    <input type="text" id="omzet" name="omzet">
                </li>
            </ul>
            <input type="submit" name="submit">
        </form>
<?php if($message): ?>
<p><?= $message ?></p>
<?php endif ?>
</body>
</html>

