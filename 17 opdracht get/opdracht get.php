<?php

	$artikels = array(
					array(
						"titel" => "Acht internetreuzen eisen beperkingen NSA-spionage",
						"datum" => "9 december 2013",
						"inhoud" => "De internetbedrijven coördineren voor het eerst een grote, gezamenlijke reactie op de onthullingen van klokkenluider Edward Snowden over de praktijken van de Amerikaanse geheime dienst NSA. Het gaat om Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn en Yahoo.",
						"afbeelding" => "img.png",
						"afbeeldingBeschrijving" => "NSA",
						),
						array(
						"titel" => "Acht internetreuzen eisen beperkingen NSA-spionage",
						"datum" => "9 december 2013",
						"inhoud" => "De internetbedrijven coördineren voor het eerst een grote, gezamenlijke reactie op de onthullingen van klokkenluider Edward Snowden over de praktijken van de Amerikaanse geheime dienst NSA. Het gaat om Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn en Yahoo.",
						"afbeelding" => "img.png",
						"afbeeldingBeschrijving" => "NSA",
						),
						array(
						"titel" => "Acht internetreuzen eisen beperkingen NSA-spionage",
						"datum" => "9 december 2013",
						"inhoud" => "De internetbedrijven coördineren voor het eerst een grote, gezamenlijke reactie op de onthullingen van klokkenluider Edward Snowden over de praktijken van de Amerikaanse geheime dienst NSA. Het gaat om Apple, Google, Microsoft, Facebook, Twitter, AOL, LinkedIn en Yahoo.",
						"afbeelding" => "img.png",
						"afbeeldingBeschrijving" => "NSA",
						)
	);
	
	$artikelFull		= 	false;
	$artikelNotFound	=	false;
	if ( isset ( $_GET["id"] ) ) 
	{
		$id = $_GET["id"];
		if ( array_key_exists( $id, $artikels ) )
		{
			$artikels = array( $artikels[$id] );
			$artikelFull = true;
		}
		else 
		{
			$artikelNotFound = true;
		}
	}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
	<?php if ( !$artikelFull ): ?>
		<title>Oplossing get</title>
	<?php elseif ( $artikelNotFound ): ?>
		<title>Not Found</title>
	<?php else: ?>
		<title><?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>
</head>
<body>
<?php if ( !$artikelNotFound ): ?>
	<?php foreach($artikels as $id => $value): ?>
		<section class="<?php echo ( !$artikelFull ) ? 'multiple': 'single' ; ?>">
			<h1><?php echo $value["titel"] ?></h1>
			<p><?php echo $value["datum"] ?></p>
			<img src= "<?php echo $value["afbeelding"] ?>" alt="<?php echo $value["afbeeldingBeschrijving"] ?>"/>
			<p><?php  echo ( !$artikelFull ) ? str_replace ( "\r\n", "</p><p>", substr( $value['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$value['inhoud'] ) ; ?></p>
			<?php if ( !$artikelFull ): ?>
				<a href="opdracht get.php?id=<?php echo $id ?>">Lees meer</a>
			<?php endif ?>
		</section>
	<?php endforeach ?>
<?php else : ?>
<?php echo "not found" ?>
<?php endif ?>
















</body>
</html>