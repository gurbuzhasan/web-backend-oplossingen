<?php
	$geld = "100000";
	$jaar = "10";
	$counter = $jaar;
	function rentevoetBerekenen($startGeld, $jaar){
		$stop = "0";
		global $counter;
		if($jaar == $stop){
			return 1;
		}else{
			$rente = round($startGeld*1.08,2);
			rentevoetBerekenen($rente, $jaar-1);
			
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
    <p><?php echo rentevoetBerekenen($geld, $jaar) ?></p>


</body>
</html>