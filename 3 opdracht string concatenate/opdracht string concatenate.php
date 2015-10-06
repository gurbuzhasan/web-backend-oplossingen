<?php
	$voornaam 			= 	"Hasan";
	$achternaam 		= 	"Gurbuz";
    $volledigeNaam      =   $voornaam.$achternaam;
    $volledigeNaamLength = strlen($volledigeNaam);
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>

    <p><?php echo $volledigeNaam ?></p><br>
    <p><?php echo $volledigeNaamLength ?></p>

</body>
</html>