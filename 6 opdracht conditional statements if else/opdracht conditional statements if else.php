<?php
	$jaartal   =   1600;
    $schrikkel =   "false"; 

    if($jaartal % 4 === 0 && $jaartal % 100 ===0 || $jaartal % 400 === 0){
        $schrikkel = "true";
    }

        
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p> <?php echo $schrikkel ?></p>


</body>
</html>