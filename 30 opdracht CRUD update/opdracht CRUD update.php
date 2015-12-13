<?php

	$message = "";
	$nummer = 1;
	$isEdit = false;
	
		try{
			$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
			$message = "verbonden";
			
			
			$query = 'select * from brouwers';
				
			$statement = $db->prepare($query);
			
			$statement->execute();

			$fetchArray = array();
			
			
		
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$fetchArray[] = $row;
			}

			if(isset($_POST["delete"])){
			
				var_dump($_POST);		
			
			
			
				$query2 = 'delete from brouwers
							where brouwernr = :brouwernr';
				$statement2 = $db->prepare($query2);
				$statement2->bindValue(":brouwernr",$_POST["delete"]);
				
			
				if($statement2->execute()){
					
					$message = "gelukt";
				}else{
					$message = "nope";
				}
			}
			
			if(isset($_POST["edit"])){
			
				$isEdit = true;
			}
			
			
			if(isset($_POST["wijzigen"])){
			
				$query3 = "update brouwers
							set brnaam = :brnaam,
							adres = :adres,
							postcode = :postcode,
							gemeente = :gemeente,
							omzet = :omzet,
							where brouwernr = :brouwernr";
							
				$statement3 = $db->prepare($query3);
				$statement3->bindValue(":brnaam", $_POST["brnaam"] );
				$statement3->bindValue(":adres", $_POST["adres"] );
				$statement3->bindValue(":postcode", $_POST["postcode"] );
				$statement3->bindValue(":gemeente", $_POST["gemeente"] );
				$statement3->bindValue(":omzet", $_POST["omzet"] );
				$statement3->bindValue(":brouwernr", $_POST["edit"] );
				
				
				
				if($statement3->execute()){
					
					$message = "gelukt";
				}else{
					$message = "nope";
				}
				
			}
			
		}
		catch(PDOException $e){
			
			$message = "verbinden mislukt: " . $e.getMessage();
		}
	


	
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>

<?php if($message): ?>
<p><?= $message ?></p>
<?php endif ?>

<style>
		table th, td{
			border:1px black solid;
			padding: 10px;
		}
		
		thead{
			background-color:grey;
		}
		tbody tr:nth-child(odd){
			background-color:silver;
		}
		input.bg{
			background-image: url(icon-delete.png);
			background-repeat:no-repeat;
		}
		input.bg2{
			background-image: url(icon-edit.png);
			background-repeat:no-repeat;
		}

	</style>

	<?php if($isEdit): ?>
			<?php foreach($fetchArray as $row => $value): ?>
				<?php if($value["brouwernr"]== $_POST["edit"]): ?>
					<h1> brouwerij <?= $fetchArray[$row]["brnaam"] ?> (# <?= $fetchArray[$row]["brouwernr"] ?>) wijzigen</h1>
					
					<form>
                            <ul>
                                <li>
                                    <label for="brouwernaam">Brouwernaam</label>
                                    <input type="text" id="brouwernaam" name="brnaam" value="<?= $fetchArray[$row]["brnaam"] ?>">
                                </li>
                                <li>
                                    <label for="adres">adres</label>
                                    <input type="text" id="adres" name="adres" value="<?= $fetchArray[$row]["adres"] ?>">
                                </li>
                                <li>
                                    <label for="postcode">postcode</label>
                                    <input type="text" id="postcode" name="postcode" value="<?= $fetchArray[$row]["postcode"] ?>">
                                </li>
                                <li>
                                    <label for="gemeente">gemeente</label>
                                    <input type="text" id="gemeente" name="gemeente" value="<?= $fetchArray[$row]["gemeente"] ?>">
                                </li>
                                <li>
                                    <label for="omzet">omzet</label>
                                    <input type="text" id="omzet" name="omzet" value="<?= $fetchArray[$row]["omzet"] ?>">
                                </li>
                            </ul>
                            <input type="submit" name="wijzigen">
                        </form>
					
					
				<?php endif ?>
			<?php endforeach ?>
	<?php endif ?>

	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>brouwernummer</th>
				<th>brouwernaam</th>
				<th>adres</th>
				<th>postcode</th>
				<th>gemeente</th>
				<th>omzet</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>
		
			<?php foreach($fetchArray as $row) : ?>
			
			
			
	        	<tr>
	            	<td><?= $nummer++ ?></td>
	                <td><?= $row["brouwernr"] ?></td>
	                <td><?= $row["brnaam"] ?></td>
	                <td><?= $row["adres"] ?></td>
	                <td><?= $row["postcode"] ?></td>
	                <td><?= $row["gemeente"] ?></td>
	                <td><?= $row["omzet"] ?></td>
					<td>
						<form action="opdracht CRUD update.php" method="post">
							<input type="submit" name="delete" class="bg" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
					<td>
						<form action="opdracht CRUD update.php" method="post">
							<input type="submit" name="edit" class="bg2" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
	            </tr>
	        <?php endforeach ?>
		
		
		
		</tbody>
	
	
	
	</table>
	

</body>
</html>

