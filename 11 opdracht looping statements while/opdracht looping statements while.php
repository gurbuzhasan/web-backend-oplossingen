<?php
	$getallen		=	array();

	$getal = 0;

	while ( $getal < 100 )
	{
		$getallen[]	=	$getal;
		 $getal++;
	}

    $getallenPrint = implode( ', ', $getallen );

	$getal = 0;

	$getallen2	=	array();

	while ( $getal < 100 )
	{
		if ( $getal % 3 == 0 && $getal > 40 && $getal < 80 )
		{
			$getallen2[]	=	$getal;
		}

		$getal++;
	}

	$boodschappenlijstje = array('speaker', 'zaklamp', 'komkommer');

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <ul>
        <?php $teller = 0; ?>
        <?php while(isset($boodschappenlijstje[$teller])): ?>		
        <li><?= $boodschappenlijstje[$teller] ?></li>
        <?php $teller++ ?>
        <?php endwhile ?>
    </ul>

</body>
</html>