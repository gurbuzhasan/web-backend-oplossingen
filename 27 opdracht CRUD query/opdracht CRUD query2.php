<?php
	
	$nummer = 1;
	$showTable = false;
	try{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
		$message = "verbonden";
		
		
		$query = 'SELECT brouwernr, brnaam FROM brouwers ';
			
		$statement = $db->prepare($query);
		$statement->execute();
		
		$fetchArray = array();
		
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$fetchArray[] = $row;
		}
//		echo "<pre>";
//		print_r($fetchArray);
//		echo "</pre>";

		if(isset($_GET["submit"])){

			$showTable = true;
			$brouwernr = $_GET["brouwernr"];
			$query2 = 'SELECT naam FROM bieren
						where brouwernr like :brouwernr ';
				
			$statement2 = $db->prepare($query2);
			$statement2->bindValue(":brouwernr", $brouwernr);
			$statement2->execute();
			
			$fetchArray2 = array();
			
			while($row = $statement2->fetch(PDO::FETCH_ASSOC)){
				$fetchArray2[] = $row;
			}
			echo "<pre>";
			print_r($_GET);
			echo "</pre>";
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

	</style>



	<form action="opdracht CRUD query2.php" method="get">
		<select name="brouwernr">
		
			<?php foreach ($fetchArray as $row) : ?>
			<option value="<?php $row["brouwernr"] ?>" ><?=$row["brnaam"]?> </option>
			<?php endforeach ?>
		</select>
		<input type="submit" name="submit"/>
	</form>
	
	<?php if($showTable): ?>
	<table>
		<thead>
			<tr>
				<th>aantal</th>
				<th>naam</th>
			</tr>	
		</thead>
	
		<tbody>
			<?php foreach ($fetchArray2 as $row): ?>
				<tr>
					<td><?= $nummer++ ?></td>
					<td><?= $row["naam"] ?></td>
				</tr>
			<?php endforeach ?>
				
		</tbody>
	</table>

	<?php endif ?>

</body>
</html>

