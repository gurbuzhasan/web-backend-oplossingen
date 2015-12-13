<?php

	$nummer = 1;
	try{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root');
		$message = "verbonden";
		
		
		$query = 'SELECT * FROM bieren
			join brouwers on(bieren.brouwernr = brouwers.brouwernr)
			where bieren.naam like "du%" and brouwers.brnaam like "%a%"';
			
		$statement = $db->prepare($query);
		$statement->execute();
		
		$fetchArray = array();
		
		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$fetchArray[] = $row;
		}
//		echo "<pre>";
//		print_r($fetchArray);
//		echo "</pre>";
		
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
    <table>
		<thead>
			<tr>
                <th>#</th>
                <th>biernr (PK)</th>
                <th>naam</th>
                <th>brouwernr</th>
                <th>soortnr</th>
                <th>alcohol</th>
                <th>brnaam</th>
                <th>adres</th>
                <th>postcode</th>
                <th>gemeente</th>
                <th>omzet</th>
            </tr>
		</thead>
		<tbody>
	            
	    	<?php foreach($fetchArray as $row) : ?>
	        	<tr>
	            	<td><?= $nummer++ ?></td>
	                <td><?= $row["biernr"] ?></td>
	                <td><?= $row["naam"] ?></td>
	                <td><?= $row["brouwernr"] ?></td>
	                <td><?= $row["soortnr"] ?></td>
	                <td><?= $row["alcohol"] ?></td>
	                <td><?= $row["brnaam"] ?></td>
	                <td><?= $row["adres"] ?></td>
	                <td><?= $row["postcode"] ?></td>
	                <td><?= $row["gemeente"] ?></td>
	                <td><?= $row["omzet"] ?></td>
	            </tr>
	        <?php endforeach ?>
			
		</tbody>
	
	</table>


</body>
</html>

