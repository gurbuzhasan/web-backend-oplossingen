<?php
    $rijen = 10;
    $kolommen = 10;

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <style>
        .oneven
        {
		  background-color:	lightgreen;
		}

    </style>
</head>
<body>


    
    
    <table>
        <?php for($j = 0; $j < $rijen; $j++):  ?>
        <tr>	
            <?php for( $i = 1; $i <= $kolommen; $i++ ):  ?>
				<td class="<?= ( ( $j * $i ) % 2 != 0 ) ? 'oneven' : '' ?>"><?= $j * $i ?></td>
            <?php endfor ?>
        </tr>
        <?php endfor ?>
    </table>
    
    
</body>
</html>