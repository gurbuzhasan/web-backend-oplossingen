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
        
            <?php for ( $i = 0; $i < $kolommen; $i++): ?>
            <tr><td>rij</td></tr>
            <?php endfor ?>
        
    </table>
    <hr></hr>
    <table>
        
            <?php for ( $i = 0; $i < $rijen; $i++): ?>
				
			<tr>	
				<?php for ( $j = 0; $j < $rijen; $j++): ?>
				
            	<td>kolom</td>
				
				<?php endfor ?>
			</tr>	
            <?php endfor ?>
        
    </table>

    
    
</body>
</html>