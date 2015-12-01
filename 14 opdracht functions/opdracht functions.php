<?php
    function berekenSom($getal1, $getal2){
        $som = $getal1+$getal2;
        return $som;
    }

    function vermenigvuldig($getal1, $getal2){
        $resultaat = $getal1*$getal2;
        return $resultaat;
    }

    function isEven($getal){
        if($getal === 54875){
            return "TRUE";
        }
        else{
            return "FALSE";
        }
    }

    function lengthAndUpper($string){
        
        $arrResult['1'] = strlen($string);
        $arrResult['2'] = strtoupper($string);
        
        return $arrResult;
    }




?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p><?php echo berekenSom(1,3) ?></p>
	<p><?php echo vermenigvuldig(2,3) ?></p>
	<p><?php echo isEven(54875) ?></p>
	<pre><?php print_r(lengthAndUpper("hello world")) ?></pre>
    


</body>
</html>