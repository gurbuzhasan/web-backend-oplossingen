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


    $getallen = array('1' , '2' ,'3', '4', '5');
    $vermenigvuldiging = $getallen[0] * $getallen[1] * $getallen[2] * $getallen[3] * $getallen[4];
    $getallen2 = array('5' , '4' ,'3', '2', '1');
    $somArrays = $getallen[] + $getallen2[];
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <pre><?php print_r($vermenigvuldiging) ?></pre>
    <p><?php if($getallen[] % 2 != 0){
        print_r($getallen[]);
        }
        ?></p>

</body>
</html>