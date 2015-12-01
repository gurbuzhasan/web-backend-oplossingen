<?php
	session_start();
	$email = ( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email' ] : '';
	$nickname = ( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname' ] : '';
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<h1>Deel 1: registratiegegevens</h1>
	
	<form action="opdracht sessions2.php" method="post">
	
		<label>email</label>
		<input type="text" name="email" value="<?= $email ?>" <?php (isset($_GET['focus']) && $_GET == "email" ? 'autofocus' : '' ) ?>/>
		
		<label>nickname</label>
		<input type="text" name="nickname" value="<?= $nickname ?>"/>
	
		<input type="submit" name="submit"/>
	
	
	
	
	</form>

</body>
</html>