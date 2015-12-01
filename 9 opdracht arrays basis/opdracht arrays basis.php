<?php
    $dieren = array('hond' , 'blobvis' ,'kangoeroe', 'sloth', 'leopard', 'mens', 'inktvis', 'koraal', 'finding nemo', 'cthulhu');
    $dieren[0] = 'hond';
    $dieren[1] = 'blobvis';
    $dieren[2] = 'kangoeroe';
    $dieren[3] = 'sloth';
    $dieren[4] = 'leopard';
    $dieren[5] = 'mens';
    $dieren[6] = 'inktvis';
    $dieren[7] = 'koraal';
    $dieren[8] = 'finding nemo';
    $dieren[9] = 'cthulhu';

    $voertuigen['landvoertuigen'] = array('Vespa', 'fiets');
    $voertuigen['watervoertuigen'] = array('surfplank', 'vlot', 'schoener', 'driemaster');
    $voertuigen['luchtvoertuigen'] = array('luchtballon', 'helicopter', 'B52');



?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p><?php var_dump($voertuigen)    ?></p>

</body>
</html>