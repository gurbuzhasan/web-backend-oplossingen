<?php

	$message = "";
	$nummer = 1;
	
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
		input{
			background-image: url(icon-delete.png);
			background-repeat:no-repeat;
		}

	</style>

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
						<form action="opdracht CRUD delete.php" method="post">
							<input type="submit" name="delete" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
	            </tr>
	        <?php endforeach ?>
		
		
		
		</tbody>
	
	
	
	</table>
	
<?php if($message): ?>
<p><?= $message ?></p>
<?php endif ?>
</body>
</html>

