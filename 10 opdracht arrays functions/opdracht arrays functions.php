<?php
    $dieren = array('hond' , 'blobvis' ,'kangoeroe', 'sloth', 'leopard', 'mens', 'inktvis', 'koraal', 'finding nemo', 'cthulhu');
    $aantalDieren = count($dieren);
	$teZoekenDier	=	"aapvis";
    $dierGevonden	=	array_search( $teZoekenDier, $dieren );
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <p><?php print_r($aantaldieren) ?></p>

</body>
</html>