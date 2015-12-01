<?php
    $dieren = array('hond' , 'blobvis' ,'kangoeroe', 'sloth', 'leopard', 'mens', 'inktvis', 'koraal', 'finding nemo', 'cthulhu');
    $aantalDieren = count($dieren);
	$teZoekenDier	=	"hnd";
    $dierGevonden	=	array_search( $teZoekenDier, $dieren );
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <p><?php print_r($aantalDieren) ?></p>
	<p><?php if($dierGevonden !== FALSE){ echo "gevonden"; }
	else{ echo " niet gevonden"; } ?></p>

</body>
</html>