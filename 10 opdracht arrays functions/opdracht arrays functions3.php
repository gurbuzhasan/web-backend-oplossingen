<?php

    $numbers = array('8', '7', '8', '7', '3', '2', '1', '2', '4');
    $numbersDuplicates = array_unique($numbers);
    $sortNumbersGK = rsort($numbersDuplicates); 
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    <pre><?php print_r($sortNumbersGK) ?></pre>

</body>
</html>