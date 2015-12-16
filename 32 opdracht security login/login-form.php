<?php
	
	session_start();
	
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	
	
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

<h1>Inloggen</h1>

a@b.c
    <form action="login-process.php" method="post">
        <ul>
			<p style="color:red"><?php echo (isset($_SESSION["notification"]["message"]) ?  $_SESSION["notification"]["message"]  : '');?></p>
            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name="email" value="">
            </li>
			<li>
                <label for="paswoord">paswoord</label>
                <input type="password" id="password" name="password" value="">
            </li>
            
 
        <input type="submit" name="login" value="Login">
    </form>
	<br/>
	maak een account op de <a href="registratie-form.php">registratiepagina</a>.
</body>
</html>
