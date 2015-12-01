<?php


    $seconds    = 221108521;
    $minutes    = $seconds/60;
    $hours      = $minutes/60;
    $days       = $hours/24;
    $weeks      = $days/7;
    $months     = $days/31;
    $years      = $days/365;
        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <h1>Jaren, maanden, weken, dagen, uren, minuten en seconden</h1>
    <p>in <?php echo $seconds ?> seconden</p>
    <ul>
        <li>minuten: <?php echo $minutes ?></li>
        <li>uren: <?php echo $hours ?></li>
        <li>dagen: <?php echo $days ?></li>
        <li>weken: <?php echo $weeks ?></li>
       <li> maanden (31): <?php echo $months ?></li>
        <li>jaren (365): <?php echo $years ?></li>
    </ul>

</body>
</html>