<?php

	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
	
	
	
	if(isset($_GET["controller"])){
		
		$className = $_GET["controller"];
		include "classes/" . $className . ".php";
		
		$bieren = new $className();
		
		if(isset($_GET["method"])){
			
			
			$methodName = $_GET["method"];
			
			$bieren->$methodName();
		}

	}
	
	
	
	
	
	
?>


