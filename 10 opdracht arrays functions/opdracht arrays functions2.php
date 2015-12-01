<?php
    $dieren = array('hond' , 'blobvis' ,'kangoeroe', 'sloth', 'leopard', 'mens', 'inktvis', 'koraal', 'finding nemo', 'cthulhu');
    $aantalDieren = count($dieren);
	$teZoekenDier	=	"aapvis";
    $dierGevonden	=	array_search( $teZoekenDier, $dieren );

    $sortDierenAZ = sort($dieren,SORT_STRING); 

    $zoogdieren = array('aap', 'baviaan', 'chimpansee');
    $dierenLijst = array_merge($dieren, $zoogdieren);

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <pre><?php print_r($dieren) ?></pre>
	<pre><?php print_r($dierenLijst) ?></pre>

</body>
</html>