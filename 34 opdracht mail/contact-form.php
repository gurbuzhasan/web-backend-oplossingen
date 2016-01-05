<?php
	
	session_start();


	
?>
<html>
<head>
	<title>Page Title</title>
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
        <form action="contact.php" method="post">
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
</body>
</html>
