<?php
	
	session_start();
	
//	echo "<pre>";
//	print_r($_SESSION);
//	echo "</pre>";
	
	if(isset($_COOKIE["login"])){
		header("Location:dashboard.php");
	}

	
?>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

<h1>Registreren</h1>

a@k.n
    <form action="registratie-process.php" method="post">
        <ul>
			<p style="color:red"><?php echo (isset($_SESSION["notification"]["message"]) ?  $_SESSION["notification"]["message"]  : '');?></p>
            <li>
                <label for="email">e-mail</label>
                <input type="text" id="email" name="email" value="<?php echo (isset($_SESSION["user"]['email']) ?  $_SESSION["user"]['email']  : '');?>">
            </li>
            <li>
                <label for="password">paswoord</label>
                <input type="<?php echo (isset($_SESSION["generate"]) ?  "text"  : 'password');?>" id="password" name="password" value="<?php echo (isset($_SESSION["user"]["password"]) ?  $_SESSION["user"]["password"]  : "");?>">
                <input type="submit" name="generatePassword" value="Genereer een paswoord">
            </li>
        </ul>
        <input type="submit" name="registreer" value="Registreer">
    </form>
	<br/>
	of login op de <a href="login-form.php">loginpagina</a>.
</body>
</html>
