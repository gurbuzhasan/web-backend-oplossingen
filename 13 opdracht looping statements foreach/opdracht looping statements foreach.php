<?php
	  $text = file_get_contents("text-file.txt");
	  $textChars = str_split( $text );
      rsort( $textChars );
	  $textCharsReverse = array_reverse( $textChars );
	  
	  $textCharsCounter = array();
	  $teller = 0;
	  
	  foreach($textChars as $value){
    	if(isset($textCharsCounter[$value])){
    	$teller++;
     	$textCharsCounter[$value]= $teller;
      }
      else{
     	$teller = 1;
    	 $textCharsCounter[$value] = $teller;
      }
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    
<pre><?php var_dump($textChars);?></pre>
<pre><?php var_dump($textCharsReverse);?></pre>
<pre><?php var_dump($textCharsCounter);?></pre>

</body>
</html>