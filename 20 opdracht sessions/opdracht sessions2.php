<?php
	session_start();
	if( isset( $_POST['submit'] ) ) {
		$_SESSION[ 'registrationData' ][ 'deel1' ][ 'email' ] = $_POST[ 'email' ];
		$_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname' ] = $_POST[ 'nickname' ];
	}	
	$registrationData[ 'deel1' ] = $_SESSION[ 'registrationData' ][ 'deel1' ];
		
	$straat = ( isset($_SESSION[ 'registrationData' ][ 'deel2' ][ 'straat' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel2' ][ 'straat' ] : '';
	$nummer = ( isset($_SESSION[ 'registrationData' ][ 'deel2' ][ 'nummer' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel2' ][ 'nummer' ] : '';
	$gemeente = ( isset($_SESSION[ 'registrationData' ][ 'deel2' ][ 'gemeente' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel2' ][ 'gemeente' ] : '';
	$postcode = ( isset($_SESSION[ 'registrationData' ][ 'deel2' ][ 'postcode' ] ) ) ? $_SESSION[ 'registrationData' ][ 'deel2' ][ 'postcode' ] : '';

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
	<h1>registratiegegevens</h1>
	
	<p>email: <?= $registrationData[ 'deel1' ][ 'email' ]?> <br/> nickname: <?= $registrationData[ 'deel1' ][ 'nickname' ]?> </p>
	
	<form action="opdracht sessions3.php" method="post">
	
        	<label>straat</label>
        	<input type="text" name="straat"value="<?= $straat ?>" ><br>
        	<label>nummer</label>
        	<input type="text" name="nummer" value="<?= $nummer ?>"><br>

        	<label>gemeente</label>
        	<input type="text" name="gemeente" value="<?= $gemeente ?>"><br>
        	<labe">postcode</label>
        	<input type="text" name="postcode" value="<?= $postcode ?>"><br>
        	<input type="submit" name="submit">
    </form>
	
	<a href="?session=destroy"> destroy</a>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>