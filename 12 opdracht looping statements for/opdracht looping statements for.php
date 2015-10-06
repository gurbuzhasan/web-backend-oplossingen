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
        <tr>
            <?php for ( $kolom = 0; $kolom <= $kolommen; $kolom++): ?>
            <td>kolom</td>
            <?php endfor ?>
        </tr>
    </table>
    
    
    <table>
        <?php for($rij = 0; $rij < $rijen; $rij++):  ?>
        <tr>	
            <?php for( $kolom = 1; $kolom <= $kolommen; $kolom++ ):  ?>
				<td class="<?= ( ( $rij * $kolom ) % 2 != 0 ) ? 'oneven' : '' ?>"><?= $rij * $kolom ?></td>
            <?php endfor ?>
        </tr>
        <?php endfor ?>
    </table>
    
    
</body>
</html>