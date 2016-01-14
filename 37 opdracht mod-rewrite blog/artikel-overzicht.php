<?php
	session_start();
	$teller = 0;
	$basePath = "/37 opdracht mod-rewrite blog";
	try{
	if(!isset($_GET["submit"])){
		$db = new PDO('mysql:host=localhost;dbname=opdracht mod rewrite blog', 'root', 'root');
		
		$query2 ="select * from artikels";
		$statement2 = $db->prepare( $query2 );
		$statement2->execute();
		
		
		$fetchArray = array();
	
		while($row = $statement2->fetch(PDO::FETCH_ASSOC)){
			$fetchArray[] = $row;
		}
		foreach($fetchArray as $row){
			$_SESSION['artikels']= $fetchArray;
			
		}
		
	}	
	}catch(PDOException $e){
			
		$_SESSION['notification'] = "verbinden mislukt: " . $e->getMessage();
		
	}
?>
<html>
<head>
	<title>Page Title</title>
	 <meta charset="UTF-8"> 
</head>
<body>
	<h1>Artikels overzicht</h1>
	
	<p>
		<?php echo(isset($_SESSION['notification']) ? $_SESSION['notification'] : ""); ?>
		<?php $_SESSION['notification'] = ""; ?>
	</p>
	
<!--	<pre>
		<?php print_r($_GET); ?>
	</pre> -->
	<div style="border:solid ; padding:10px">
	
		<form action="<?= $basePath ?>/artikel-zoeken-redirect.php" method="get">
	        <label for="query-content">Zoeken in artikels:</label>
	        <input type="text" name="artikelzoeken" id="query-content">
	        <input type="submit" name="submitArtikel">
	    </form>
	    
	    <form action="<?= $basePath ?>/artikel-zoeken-redirect.php" method="get">
	        <label for="query-date">Zoeken op datum:</label>
	        <select name="datumzoeken" id="query-date">
	            
	            <option value="2010">2010</option>
	            <option value="2011">2011</option>
	            <option value="2012">2012</option>
	            <option value="2013">2013</option>
	            <option value="2014">2014</option>
	            <option value="2015">2015</option>
	            <option value="2016">2016</option>
	            <option value="2017">2017</option>
	            <option value="2018">2018</option>
	            
	        </select>
	        <input type="submit" name="submitDate" value="Zoeken">
	    </form>

	</div>
	
	<div style="border:solid ; padding:10px">
	    <h1>Artikels overzicht</h1>                         

	    <a href="<?= $basePath ?>/artikels/toevoegen">Artikel toevoegen</a>
		
		
		<?php foreach($fetchArray as $row) : ?>
	    	<article>
	        	<h2><?= $_SESSION['artikels'][$teller]["titel"] ?></h2>
				<p>datum: <?= $_SESSION['artikels'][$teller]["datum"] ?></p>
	            <p><?= $_SESSION['artikels'][$teller]["text"] ?></p>
	            <p>keywords: <?= $_SESSION['artikels'][$teller]["kernwoorden"] ?></p>
	        </article>
		<?php $teller++ ?>
		<hr/>
	    <?php endforeach ?>
	
	</div>
		
</body>
</html>