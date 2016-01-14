<?php
	session_start();

	$basePath = "/37 opdracht mod-rewrite blog";


				
		if(isset($_GET["submitArtikel"])) {
			
			
			header("location:" . $basePath . "/artikels/zoeken/content/" . $_GET["artikelzoeken"]);
			
		
		}elseif(isset($_GET["submitDate"])) {
			
			header("location:" . $basePath . "/artikels/zoeken/datum/" . $_GET["datumzoeken"]);
	
		}else{
			header("location:" . $basePath);
		}

?>