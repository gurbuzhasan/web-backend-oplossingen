<?php
	
	
	if(isset($_GET['key'])){
		
		switch($_GET["key"]){
			
			case "artikels": 
				include('artikel-overzicht.php'); 
				break;
			case "artikels/toevoegen":
				include('artikel-toevoegen-form.php');  
				break;
			case "artikels/toevoegen/confirm":
				$_POST["submit"] = "set";
				include('artikel-toevoegen.php');
				include('artikel-toevoegen-form.php');  
				
				break;
			case "artikels/zoeken":
				include('artikel-zoeken.php');  
				break;
			case "artikels/zoeken/content":
				include('artikel-zoeken.php');  
				break;
			case "artikels/zoeken/datum":
				include('artikel-zoeken.php');  
				break;
		}

		
		
	}
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
//	
//	echo "<pre>";
//	print_r($_POST);
//	echo "</pre>";
//	
//		echo "<pre>";
//	print_r($_SESSION);
//	echo "</pre>";
?>

welkom!
