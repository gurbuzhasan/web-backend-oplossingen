<?php
    $getal  =   rand(1,100);
    $boodschap  = "";
    
    if($getal>1 && $getal<10){
        $boodschap = "Het getal ligt tussen 1 en 10";
    }elseif($getal >10 && $getal<20){
        $boodschap = "Het getal ligt tussen 10 en 20";
    }elseif($getal >20 && $getal<30){
        $boodschap = "Het getal ligt tussen 20 en 30";
    }elseif($getal >30 && $getal<40){
        $boodschap = "Het getal ligt tussen 30 en 40";
    }elseif($getal >40 && $getal<50){
        $boodschap = "Het getal ligt tussen 40 en 50";
    }elseif($getal >50 && $getal<60){
        $boodschap = "Het getal ligt tussen 50 en 60";
    }elseif($getal >60 && $getal<70){
        $boodschap = "Het getal ligt tussen 60 en 70";
    }elseif($getal >70 && $getal<80){
        $boodschap = "Het getal ligt tussen 70 en 80";
    }elseif($getal >80 && $getal<90){
        $boodschap = "Het getal ligt tussen 80 en 90";
    }elseif($getal >90 && $getal<100){
        $boodschap = "Het getal ligt tussen 90 en 100";
    }
    
    $tekst = strrev($boodschap);

        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
<p><?php echo $tekst ?></p>
</body>
</html>