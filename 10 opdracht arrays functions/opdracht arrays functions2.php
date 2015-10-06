<?php
    $dieren = array('hond' , 'blobvis' ,'kangoeroe', 'sloth', 'leopard', 'mens', 'inktvis', 'koraal', 'finding nemo', 'cthulhu');
    $aantalDieren = count($dieren);
	$teZoekenDier	=	"aapvis";
    $dierGevonden	=	array_search( $teZoekenDier, $dieren );

    $sortDierenAZ = sort($dieren,SORT_STRING); 

    $zoogdieren = array('aap', 'baviaan', 'chimpansee');
    $dierenLijst = array_merge($dieren, $zoogdieren);

    $numbers = array('8', '7', '8', '7', '3', '2', '1', '2', '4');
    $numbersDuplicates = array_unique($numbers);
    $sortNumbersGK = rsort($numbers); 
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <p><?php print_r($aantaldieren) ?></p>

</body>
</html>