<?php

	$message = "";
	$isEdit = false;
	$getExplode = array("", "asc");
	
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
			
			
			if(isset($_GET["order_by"])){
				
				$getExplode = explode("-", $_GET["order_by"]);
				
//				echo "<pre>";
//				print_r($getExplode);
//				echo "</pre>";
				


				if($getExplode[1] == "desc"){
					$query2 = $query . " ORDER BY " . $getExplode[0] . " DESC";
//					echo $query2;
				}else{
					$query2 = $query . " ORDER BY " . $getExplode[0] . " ASC";
//					echo $query2;
				}
					
					$statement2 = $db->prepare($query2);
					
//					$statement2->bindValue(':kolom', $getExplode[0], PDO::PARAM_STR);
					$statement2->execute();
					
					
					$fetchArray = array();
					while($row = $statement2->fetch(PDO::FETCH_ASSOC)){
						$fetchArray[] = $row;
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
			padding: 20px;
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
		
		.order a{
			padding-right:20px;
		    background-repeat:no-repeat;
		    background-position:right;
		}
		.order.ascending a 
		{
		    background-image: url("icon-asc.png");
		}

		.order.descending a
		{
		    background-image: url("icon-desc.png");
		}

	</style>



	<table>
		<thead>
			<tr>
			
			<?php for($i=0; $i<$columns; $i++) : ?>
				<?php $meta = $statement->getColumnMeta($i)?>
					<?php switch($meta["name"]): 
						 case "biernr": ?> 
						 
						 	<?php if($getExplode[1]== "asc" && $getExplode[0]=="biernr"): ?>
						 		<th class="order descending"> <a href="index.php?order_by=biernr-desc">
							<?php else: ?>
								<th class="order ascending"> <a href="index.php?order_by=biernr-asc">
							<?php endif ?>
								
							<?php echo $meta["name"]?> </a> </th> 
							
						<?php break; ?>
						
						<?php case "naam": ?> 
						 
						 	<?php if($getExplode[1]== "asc" && $getExplode[0]=="naam"): ?>
						 		<th class="order descending"> <a href="index.php?order_by=naam-desc">
							<?php else: ?>
								<th class="order ascending"> <a href="index.php?order_by=naam-asc">
							<?php endif ?>
								
							<?php echo $meta["name"]?> </a> </th> 
							
						<?php break; ?>
						
						<?php case "brnaam": ?> 
						 
						 	<?php if($getExplode[1]== "asc" && $getExplode[0]=="brnaam"): ?>
						 		<th class="order descending"> <a href="index.php?order_by=brnaam-desc">
							<?php else: ?>
								<th class="order ascending"> <a href="index.php?order_by=brnaam-asc">
							<?php endif ?>
								
							<?php echo $meta["name"]?> </a> </th> 
							
						<?php break; ?>
						
						<?php case "soort": ?> 
						 
						 	<?php if($getExplode[1]== "asc" && $getExplode[0]=="soort"): ?>
						 		<th class="order descending"> <a href="index.php?order_by=soort-desc">
							<?php else: ?>
								<th class="order ascending"> <a href="index.php?order_by=soort-asc">
							<?php endif ?>
								
							<?php echo $meta["name"]?> </a> </th> 
							
						<?php break; ?>
						
						<?php case "alcohol": ?> 
						 
						 	<?php if($getExplode[1]== "asc" && $getExplode[0]=="alcohol"): ?>
						 		<th class="order descending"> <a href="index.php?order_by=alcohol-desc">
							<?php else: ?>
								<th class="order ascending"> <a href="index.php?order_by=alcohol-asc">
							<?php endif ?>
								
							<?php echo $meta["name"]?> </a> </th> 
							
						<?php break; ?>
						
							

					<?php endswitch ?>
			<?php endfor ?>
				<th></th>
				<th></th>
			</tr>
		</thead>
		
		<tbody>
		
			<?php foreach($fetchArray as $row) : ?>
			
			
			
	        	<tr>
					
	                <td><?= $row["biernr"] ?></td>
	                <td><?= $row["naam"] ?></td>
					<td><?= $row["alcohol"] ?></td>
	                <td><?= $row["brnaam"] ?></td>
	                <td><?= $row["soort"] ?></td>
	                
					<td>
						<form action="index.php" method="post">
							<input type="submit" name="delete" class="bg" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
					<td>
						<form action="index.php" method="post">
							<input type="submit" name="edit" class="bg2" value="<?= $row["brouwernr"] ?>"/>
						</form>
					</td>
	            </tr>
	        <?php endforeach ?>
		
		
		
		</tbody>
	
	
	
	</table>
	

</body>
</html>

