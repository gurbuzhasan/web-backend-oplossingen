<?php
	
	$date = mktime(22, 35, 25, 1, 21, 1904);
	$timestamp = date( 'd F Y, h:i:s a', $date);
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<?= $timestamp ?>

</body>
</html>