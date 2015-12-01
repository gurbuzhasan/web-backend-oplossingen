<?php
	session_start();
	
	if(isset($_POST["addTodo"])){
//		echo "<pre>";
//		var_dump($_POST);
//		echo "</pre>";
		
		$_SESSION["todo"][] = $_POST["description"];
		
//		echo "<pre>";
//		var_dump($_SESSION);
//		echo "</pre>";
	}
	
	if(isset($_POST["addDone"])){
//		echo "<pre>";
//		var_dump($_POST);
//		echo "</pre>";
		
		$taskDone = array_search($_POST["addDone"],$_SESSION["todo"]);
		
		unset($_SESSION["todo"][$taskDone]);
		
		$_SESSION["done"][] = $_POST["addDone"];
		
//		echo "<pre>";
//		var_dump($_SESSION);
//		echo "</pre>";
	}
	
	if(isset($_POST["removeDone"])){
//		echo "<pre>";
//		var_dump($_POST);
//		echo "</pre>";
		
		$taskDone = array_search($_POST["removeDone"],$_SESSION["done"]);
		
		unset($_SESSION["done"][$taskDone]);
		$_SESSION["todo"][] = $_POST["removeDone"];
		
//		echo "<pre>";
//		var_dump($_SESSION);
//		echo "</pre>";
	}
	
	if(isset($_POST["removeTodoTask"])){
//		echo "<pre>";
//		var_dump($_POST);
//		echo "</pre>";
		
		$taskDone = array_search($_POST["removeTodoTask"],$_SESSION["todo"]);
		
		unset($_SESSION["todo"][$taskDone]);
		
//		echo "<pre>";
//		var_dump($_SESSION);
//		echo "</pre>";
	}
	
	if(isset($_POST["removeDoneTask"])){
//		echo "<pre>";
//		var_dump($_POST);
//		echo "</pre>";
		
		$taskDone = array_search($_POST["removeDoneTask"],$_SESSION["done"]);
		
		unset($_SESSION["done"][$taskDone]);
		
//		echo "<pre>";
//		var_dump($_SESSION);
//		echo "</pre>";
	}


?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo App</title>
        <link rel="stylesheet" href="global.css">
		
		<style>
		.xbutton{
			background-color:red;
		}
		</style>
    </head>
    <body>

    <h1>Todo app</h1>
	<form action="" method="post">
		<ul>
			<?php if(isset($_SESSION["todo"])): ?>
				<?php foreach($_SESSION["todo"] as $key => $value): ?>
					<li><input type="submit" name="addDone" value="<?= $value ?>"/><button type="submit" name="removeTodoTask" value="<?= $value ?>"/ class="xbutton">X</button></li>
				<?php endforeach; ?>
				
			<?php else: ?>
				<p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>	
			<?php endif; ?>
		</ul>
	</form>
		
		
	
	<form action="" method="post">
		
			<?php if(isset($_SESSION["done"])): ?>
				<h1>Done!</h1>
				<ul>
					<?php foreach($_SESSION["done"] as $key => $value): ?>
						<li><input type="submit" name="removeDone" value="<?= $value ?>"/><button type="submit" name="removeDoneTask" value="<?= $value ?>"/ class="xbutton">X</button></li>
					<?php endforeach; ?>
				</ul>
				
			<?php endif; ?>
		
	</form>				
		
		<h1>Todo toevoegen</h1>

		<form action="" method="POST">

			<ul>
				<li>
					<label for="description">Beschrijving: </label>
					<input type="text" id="description" name="description" autofocus>
				</li>
			</ul>

			<input type="submit" name="addTodo" value="Toevoegen">

		</form>
    </body>
</html>