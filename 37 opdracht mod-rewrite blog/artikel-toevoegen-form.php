<?php
	session_start();
	
	$basePath = "/37 opdracht mod-rewrite blog";
	
?>
<html>
<head>
	<title>Page Title</title>
	 <meta charset="UTF-8"> 
</head>
<body>
	<h1>Artikel toevoegen</h1>
	
	<p><?php echo(isset($_SESSION['notification']) ? $_SESSION['notification'] : ""); ?></p>
	<?php $_SESSION['notification'] = ""; ?>
	
    <a href="<?= $basePath ?>/artikels">Terug naar overzicht</a>

    <form action="<?= $basePath ?>/artikels/toevoegen/confirm" method="post">
        <ul>
            <li>
                <label for="titel">Titel</label> <br/>
                <input type="text" id="titel" name="titel" value="<?php echo(isset($_SESSION['titel']) ? $_SESSION['titel'] : ""); ?>">
            </li>
            <li>
                <label for="text">Text</label> <br/>
                <textarea id="text" name="text"><?php echo(isset($_SESSION['text']) ? $_SESSION['text'] : ""); ?></textarea>
            </li>
            <li>
                <label for="kernwoorden">Kernwoorden</label> <br/>
                <input type="text" id="kernwoorden" name="kernwoorden" value="<?php echo(isset($_SESSION['kernwoorden']) ? $_SESSION['kernwoorden'] : ""); ?>">
            </li>
            <li>
                <label for="datum">Datum</label> <br/>
                <input type="date" id="datum" name="datum" value="<?php echo(isset($_SESSION['datum']) ? $_SESSION['datum'] : "jjjj-mm-dd"); ?>">
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>


		$(document).ready(function(){
			console.log("ready");
			
			
				var inputData = $("#contact-form").serialize();
				
				
				console.log(inputData);
				$.ajax({
					
					type:"POST",
					url:"/37 opdracht mod-rewrite blog/artikels/toevoegen/confirm",
					data:inputData,
					dataType: "json", //manier om json string te decoderen
					success:function(data){
						console.log(data);
						console.log("success function werkt " + data);
						
						if(data["type"] == "success"){
							
							console.log(data);
							
							
						}
						
					}
					
				});
				//return false om niet meteen de form te submitten
				return false;
			})
		
		
	</script>
</body>
</html>
