<?php
	function __autoload($class_name) {
    	include "/classes/" . $class_name . ".php";
	}
	
	$sloth = new Animal("bertje","male","50");
	$hert = new Animal("gertje","male","100");
	$tiger = new Animal("hertje","female","20");
	
	$lion1 = new Lion("simba", "male", "100", "congo lion");
	$lion2 = new Lion("scar", "male", "100", "kenia lion");
	
	$zebra1 = new Zebra("zeke", "male", "100", "quagga");
	$zebra2 = new Zebra("zana", "male", "100", "selous");
	
?>



<html>
<head>
	<title></title>
</head>
<body>
	<h1>Instanties van de Animal class</h1>
	<p><?= $sloth->getName(); ?> is van het geslacht <?= $sloth->getGender(); ?> en heeft momenteel <?= $sloth->getHealth(); ?> levenspunten (special move: <?= $sloth->doSpecialMove(); ?>)</p>
	<p><?= $hert->getName(); ?> is van het geslacht <?= $hert->getGender(); ?> en heeft momenteel <?= $hert->getHealth(); ?> levenspunten (special move: <?= $hert->doSpecialMove(); ?>)</p>
	<p><?= $tiger->getName(); ?> is van het geslacht <?= $tiger->getGender(); ?> en heeft momenteel <?= $tiger->getHealth(); ?> levenspunten (special move: <?= $tiger->doSpecialMove(); ?>)</p>

	<h1>Instanties van de Lion class</h1>
	<p>de special move van <?= $lion1->getName(); ?> (soort: <?= $lion1->getSpecies(); ?>): <?= $lion1->doSpecialMove(); ?></p>
	<p>de special move van <?= $lion2->getName(); ?> (soort: <?= $lion2->getSpecies(); ?>): <?= $lion2->doSpecialMove(); ?></p>
	
	<h1>Instanties van de zebra class</h1>
	<p>de special move van <?= $zebra1->getName(); ?> (soort: <?= $zebra1->getSpecies(); ?>): <?= $zebra1->doSpecialMove(); ?></p>
	<p>de special move van <?= $zebra2->getName(); ?> (soort: <?= $zebra2->getSpecies(); ?>): <?= $zebra2->doSpecialMove(); ?></p>



</body>
</html>