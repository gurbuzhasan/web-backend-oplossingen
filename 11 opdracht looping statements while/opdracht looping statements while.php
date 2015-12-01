<?php

	$getal = 0;

	while ( $getal <= 100 ){
 		echo $getal.", ";
		$getal++;
	}
	
	echo '<br>'.'<br>';
	
	$getal2 = 0;
    while($getal2 <= 100){
        if(($getal2 >= 40) && ($getal2 <= 80) && (($getal2 % 3) == 0) ){
          echo $getal2. " , ";
         }
           $getal2++;

    }


?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    

</body>
</html>