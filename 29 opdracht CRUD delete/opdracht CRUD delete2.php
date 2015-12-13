<?php

	$message = "";
	$nummer = 1;
	$confirmDelete = false;
	
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
			
				$confirmDelete = true;
				
				if(isset($_POST["yes"])){
					
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
				}elseif(isset($_POST["no"])){
					$confirmDelete = false;
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
			padding: 5px;
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

	</style>
	
	<?php if($message): ?>
	<p><?= $message ?></p>
	<?php endif ?>
	
	<?php if($confirmDelete): ?>
	<p>weet u zeker dat u deze datarij wilt verwijderen?</p>
	<form action="opdracht CRUD delete2.php" method="post">
		<input type="submit" name="yes" value="ja"/>
		<input type="submit" name="no" value="nee"/>
	</form>
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
						<form action="opdracht CRUD delete2.php" method="post">
							<input type="submit" name="delete" class="bg" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
	            </tr>
	        <?php endforeach ?>
		
		
		
		</tbody>
	
	
	
	</table>
	

</body>
</html>

