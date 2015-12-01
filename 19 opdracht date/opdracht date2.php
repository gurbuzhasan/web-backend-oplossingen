<?php
	setlocale(LC_ALL, 'nld_NLD');
	$date = mktime(22, 35, 25, 1, 21, 1904);
	$timestamp = strftime('%d %B %Y, %I:%M:%S %p', $date);
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<?= $timestamp ?>

</body>
</html>