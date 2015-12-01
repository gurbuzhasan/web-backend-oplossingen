<?php

    $getallen = array('1' , '2' ,'3', '4', '5');
    $vermenigvuldiging = $getallen[0] * $getallen[1] * $getallen[2] * $getallen[3] * $getallen[4];
    $getallen2 = array('5' , '4' ,'3', '2', '1');

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <pre><?php print_r($vermenigvuldiging) ?></pre>
	
    <pre><?php 
	
	for ($i = 0; $i < sizeof($getallen); $i++){
		if($getallen[$i]%2 != 0){
        	print_r($getallen[$i]);
			echo " ";
        }
	}
	
    ?></pre>
	
	    <pre><?php 
	
	for ($i = 0; $i < sizeof($getallen); $i++){
		print_r($getallen[$i] + $getallen2[$i]);
		echo " ";
	}
	
    ?></pre>

</body>
</html>