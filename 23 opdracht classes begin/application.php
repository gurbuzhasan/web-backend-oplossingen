<?php
	function __autoload($class_name) {
    	include $class_name . '.php';
	}
	
	$number1 = 155;
	$number2 = 100;
	
	$classPercent = new Percent($number1, $number2);
?>



<html>
<head>
	<title></title>
</head>
<body>
	<p>Hoeveel procent is <?= $number1 ?> van <?= $number2 ?>?</p>

	<table>
		<tr>
			<td>Absoluut</td>
			<td><?= $classPercent->absolute ?></td>
		</tr>
		<tr>
			<td>Relatief</td>
			<td><?= $classPercent->relative ?></td>
		</tr>
		<tr>
			<td>Geheel getal</td>
			<td><?= $classPercent->hundred ?></td>
		</tr>
		<tr>
			<td>Nominaal</td>
			<td><?= $classPercent->nominal ?></td>
		</tr>
	</table>
</body>
</html>