<?php
	$text	=	file_get_contents( 'text-file.txt' );
	$textChars = str_split($text);
	rsort($textChars);
	$textCharsZA = array_reverse($textChars);

	$ArrayCounter = array();

	foreach($characterSortedReversed as $value)
	{
		if(isset($ArrayCounter[$value]))
		{
			$ArrayCounter[$value]++;
		}
		else
		{
			$ArrayCounter[$value] = 1;
		}
		
	}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
    
</body>
</html>