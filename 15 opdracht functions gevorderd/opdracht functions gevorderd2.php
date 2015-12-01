<?php
	$pigHealth  = '5';
	$maximumThrows   = '8';
	
	function calculateHit(){
		$hitChance = rand(1,100);
		
		global $pigHealth;
		
		if($hitChance <=40){
			$pigHealth--;
			echo "Raak! Er zijn nog maar ".$pigHealth." varkens over."."<br>";
		}else{
			echo "Mis! Nog ".$pigHealth." varkens in het team."."<br>";
		}
	}
	
	function launchAngryBird(){
		static $functionLaunched = "0";
		global $maximumThrows;
		global $pigHealth;
		calculateHit();
		if($functionLaunched < $maximumThrows){
			$functionLaunched++;
			launchAngryBird();
			
		}elseif($functionLaunched == $maximumThrows){
			if($pigHealth <= 0){
				echo "Gewonnen!";
				return;
			}else{
				echo "Verloren!";
			}
		}
	}
	
	
	
	
	launchAngryBird();

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
</head>
<body>


</body>
</html>