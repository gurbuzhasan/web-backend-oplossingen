<?php
	$geld = "100000";
	$jaar = "10";
	$counter = $jaar;
	$renteVoet = "1.08";
	
	function rentevoetBerekenen($startGeld, $jaar, $rente){
		$stop = "0";
		global $counter;
		global $renteVoet;
		if($jaar == $stop){
			return 1;
		}else{
			$rente = round($startGeld*$renteVoet,2);
			rentevoetBerekenen($rente, $jaar-1, $renteVoet);
			
			echo "Jaar ".$counter." : ".$rente." €"."<br>";
			$counter--;
		}
		
	}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p><?php echo rentevoetBerekenen($geld, $jaar, $renteVoet) ?></p>


</body>
</html>