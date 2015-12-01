<?php


	function drukArrayAf($array){
		return $array;
	}
	
	$arrGames = array("halo","bioshock", "halflife" => "halflife2");
	$arrPrint = drukArrayAf($arrGames);

	function validateHtmlTag($html){
		if ((strpos($html,'<html>') !== false) && (strpos($html,'</html>') !== false)){
    		echo 'true';
		}
		else{
			echo 'false';
		}
	}
        



?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<h1>Opdracht functies</h1>
    <p>Games[1] heeft waarde: <?php print_r($arrPrint[1]) ?></p>
	
	<p><?php validateHtmlTag("<html> </html>") ?></p>


</body>
</html>