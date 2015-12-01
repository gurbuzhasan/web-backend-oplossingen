<?php

	$boodschappenlijstje = array('speaker', 'zaklamp', 'komkommer');
	
	$teller = 0;
	
	echo "<ul>";
	while(isset($boodschappenlijstje[$teller])){
		echo "<li>".$boodschappenlijstje[$teller]."</li>";
		$teller++;
	}
	echo "</ul>";
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    


</body>
</html>