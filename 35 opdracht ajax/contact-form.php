<?php
	
	session_start();

	
?>
<html>
<head>
	<title>Page Title</title>
	 <meta charset="UTF-8"> 
</head>
<body>

	<h1>Contacteer ons</h1>
	<p class="error">
		<style>
			p.error {color:red;}
		</style>
	<?php echo(isset($_SESSION["error"]) ? $_SESSION["error"] : "" ); ?>
	</p>
	
	<p class="succes">
		<style>
			p.succes {color:green;}
		</style>
	<?php echo(isset($_SESSION["succes"]) ? $_SESSION["succes"] : "" ); ?>
	</p>
	
	<p class="append"></p>
    <form action="contact.php" method="post" id="contact-form">
        <ul>
            <li>
                <label for="email">E-mailadres</label><br/>
                <input type="text" id="email" name="email" value="<?php echo(isset($_SESSION["email"]) ? $_SESSION["email"] : "" ); ?>">
            </li>
            <li>
                <label for="message">Boodschap</label><br/>
                <textarea name="message" id="message" cols="30" rows="10"><?php echo(isset($_SESSION["message"]) ? $_SESSION["message"] : "" ); ?></textarea>
            </li>
            <li>
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="copy">Stuur een kopie naar mezelf</label>
            </li>
        </ul>
        <input type="submit" name="submit">
    </form>
		
		
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>

//		console.log("hello");
		$(document).ready(
			
			
			//voer anonieme functie uit bij submit
			$("#contact-form").submit(function(){
				
				//steek de data van de form in een variabele
				var inputData = $("#contact-form").serialize();
				
//				console.log(inputData);
				$.ajax({
					
					type:"POST",
					url:"contact-api.php",
					data:inputData,
					dataType: "json", //manier om json string te decoderen
					success:function(data){
						
						console.log(data);
						
						//manier om json string te decoderen
//						parsedData = JSON.parse(data);
						if(data["type"] == "success"){
							
							$("#contact-form").fadeOut(function(){
							
							$(".append").append(data["type"] + ". Bedankt! Uw bericht is goed verzonden!")
							.fadeIn();
							
							});
							
						}else{
							
							$(".append").append("oops");
							
						}
						
					}
					
				});
				//return false om niet meteen de form te submitten
				return false;
			})
		)
		
	</script>
		
		
		
		
		
</body>
</html>
