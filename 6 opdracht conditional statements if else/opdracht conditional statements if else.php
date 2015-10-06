<?php
	$jaartal   =   null;
    $schrikkel =   FALSE; 

    if($jaartal % 4 === 0 && $jaartal % 100 ===0 || $jaartal % 400 === 0){
        $schrikkel = TRUE;
    }

    $seconds    = null;
    $minutes    = $seconds/60;
    $hours      = $minutes/60;
    $days       = $hours/24;
    $weeks      = $days/7;
    $months     = $weeks/31;
    $years      = $months/365;
        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>
    <p>in <?php echo $seconds ?> seconden</p>
    <p>
        minuten: <?php echo $minutes ?>
        uren: <?php echo $hours ?>
        dagen: <?php echo $days ?>
        weken: <?php echo $weeks ?>
        maanden (31): <?php echo $months ?>
        jaren (365): <?php echo $years ?>
    </p>

</body>
</html>