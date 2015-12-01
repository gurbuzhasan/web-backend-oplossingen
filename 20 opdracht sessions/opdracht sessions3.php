<?php
	session_start();
	

	
	
	$registrationData[ 'deel1' ] = $_SESSION[ 'registrationData' ][ 'deel1' ];
	$registrationData[ 'deel2' ] = $_SESSION[ 'registrationData' ][ 'deel2' ];
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<h1>overzichtspagina</h1>
	
	<label>E-mail: <?= $registrationData[ 'deel1' ][ 'email' ]?> | <a href="opdracht sessions.php?focus=email">Wijzig</a></label><br>
        <label>Nickname: <?= $registrationData[ 'deel1' ][ 'nickname' ]?> | <a href="opdracht sessions.php">Wijzig</a></label><br>
        <label>Straat: <?= $registrationData[ 'deel2' ][ 'straat' ]?> | <a href="opdracht sessions2.php">Wijzig</a></label><br>
        <label>Nummer: <?= $registrationData[ 'deel2' ][ 'nummer' ]?> | <a href="opdracht sessions2.php">Wijzig</a></label><br>
        <label>Postcode: <?= $registrationData[ 'deel2' ][ 'postcode' ]?> | <a href="opdracht sessions2.php">Wijzig</a></label><br>
        <label>Gemeente: <?= $registrationData[ 'deel2' ][ 'gemeente' ]?> | <a href="opdracht sessions2.php">Wijzig</a></label><br>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>