<?php
	$getal      =   1;
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
	$dagUpperExceptA=   str_replace("A", "a",$dagUpper);
	$dagUpperExceptLastA= str_replace("DAG", "DaG",$dagUpper);
        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p>DEEL 2: <?php  echo $dagUpper ?></p><br>
	<p>DEEL 2: <?php  echo $dagUpperExceptA ?></p><br>
	<p>DEEL 2: <?php  echo $dagUpperExceptLastA ?></p><br>

</body>
</html>