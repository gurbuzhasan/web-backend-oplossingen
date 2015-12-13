<?php

	$message = "";
	$nummer = 1;
	$isEdit = false;
	
		try{
			$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
			$message = "verbonden";
			
			
			$query = "SELECT * FROM `bieren` 
					join brouwers on(bieren.brouwernr = brouwers.brouwernr) 
					join soorten on(bieren.soortnr = soorten.soortnr)";
				
			$statement = $db->prepare($query);
			
			$statement->execute();

			$fetchArray = array();
			
			$columns = $statement->columnCount();
			
			$meta = $statement->getColumnMeta(0);
//			echo "<pre>";
//			echo $columns;
//			echo "</pre>";
		
			while($row = $statement->fetch(PDO::FETCH_ASSOC)){
				$fetchArray[] = $row;
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



	<table>
		<thead>
			<tr>
			<?php for($i=0; $i<$columns; $i++) : ?>
				<th><?php $meta = $statement->getColumnMeta($i); echo $meta["name"] ?></th>
			<?php endfor ?>
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

