<?php
$tekst = file_get_contents("text-file.txt");
$tekst = strtoupper($tekst);
$textChars = str_split( $tekst );
sort( $textChars );
     

$gegevens =array();
$counter =0;
$letters = range('A', 'Z');
$letters_lng = count($letters);
$file_lenght = count($textChars);
for($i = 0; $i< $letters_lng; $i++){
  for($j = 0; $j < $file_lenght; $j++){
    if($letters[$i]==$textChars[$j]){
    $counter++;
     
    }
  }
 $gegevens[$letters[$i]]=$counter;
 $counter = 0;
}
$not_unic_values = array_count_values($textChars);

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>
    


     <table>
      <tr>
        <td>
          <ul>
           
            <?php  foreach ($gegevens as $key => $value): ?>
                   <li><?php  echo $key."&times;".$value ?></li> 
            <?php endforeach; ?>
           </ul>
         </td>
       
      </tr>
</table>



</body>
</html>