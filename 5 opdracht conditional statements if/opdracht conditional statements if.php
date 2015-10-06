<?php
	$getal      =   null;
    $dag        =   "";

    if($getal===1){
        $dag = "maandag";
    }
    if($getal===2){
        $dag = "dinsdag";
    }
    if($getal===3){
        $dag = "woensdag";
    }
    if($getal===4){
        $dag = "donderdag";
    }
    if($getal===5){
        $dag = "vrijdag";
    }
    if($getal===6){
        $dag = "zaterdag";
    }
    if($getal===7){
        $dag = "zondag";
    }

    $dagUpper       =   strtoupper($dag);
    $posLaatsteA    =   strrpos( $dag, 'A' );
    $dag 	        =	substr_replace( $dag, 'a', $posLaatsteA, 1 );
        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    

</body>
</html>