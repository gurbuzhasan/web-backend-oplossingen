<?php
	function __autoload($class_name) {
    	include "/classes/" . $class_name . ".php";
	}

	$buildHTML = new HTMLBuilder("header.partial","footer.partial","body.partial");

?>
