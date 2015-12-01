<?php
	$fruit 			= 	"kokosnoot";
    $fruitLength    =   strlen($fruit);
    $fruitOPos      =   strpos($fruit, "o");
    $fruit2 		= 	"ananas";
    $fruit2APos     =   strpos($fruit2, "a", 3);
    $fruit2Upper    =   strtoupper($fruit2);
    $lettertje      =   "e";
    $cijfertje      =   "3";
    $langsteWoord   =   "zandzeepsodemineralenwatersteenstralen";
    $replace        =   str_replace($lettertje, $cijfertje, $langsteWoord);
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p>DEEL 1: <?php echo $fruitLength ?></p><br>
    <p>DEEL 1: <?php echo $fruitOPos ?></p><br>
    <p>DEEL 2: <?php echo $fruit2APos ?></p><br>
	<p>DEEL 2: <?php echo $fruit2Upper ?></p><br>
	<p>DEEL 3: <?php echo $replace ?></p><br>

</body>
</html>