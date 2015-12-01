<?php
	$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

	
	
	function hashFunction1( $hash, $needle ) 
	{
		$hashLength = strlen( $hash );
		$needleCount = substr_count( $hash, $needle );
		$needleProcent = ( $needleCount / $hashLength ) * 100;
		return $needleProcent;
	}
	function hashFunction2( $needle ) 
	{
		global $md5HashKey;
		$hash = $md5HashKey;
		$hashLength = strlen($hash);
		$needleCount = substr_count($hash, $needle);
		$needleProcent = ( $needleCount / $hashLength ) * 100;
		return $needleProcent;
	}
	function hashFunction3( $needle ) 
	{
		$hash = $GLOBALS['md5HashKey'];
		$hashLength = strlen( $hash );
		$needleCount = substr_count($hash, $needle);
		$needleProcent = ( $needleCount / $hashLength ) * 100;
		return $needleProcent;
	}
	$function1 = hashFunction1( $md5HashKey, "2" );
	$function2 = hashFunction2( "8" );
	$function3 = hashFunction3( "a" );
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <p>Het karakter "2" komt <?= $function1  ?>% voor in de string <?= $md5HashKey ?></p>
    <p>Het karakter "8" komt <?= $function2  ?>% voor in de string <?= $md5HashKey ?></p>
    <p>Het karakter "a" komt <?= $function3  ?>% voor in de string <?= $md5HashKey ?></p>


</body>
</html>