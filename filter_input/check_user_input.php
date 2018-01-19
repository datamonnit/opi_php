<?php
/*

	Tässä esimerkissä havainnollistetaan käyttäjän syötteen validointia
	filter_input-funktiolla. Käyttäjän syöte tarkistetaan ja kerrotaan mitkä
	ehdot se täyttää.

	TP

*/
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Check user battletag</h1>
	<?php

	if (!empty($_POST['input_string'])) {
		$options = array("options"=>array("regexp"=>"/^(\pL{1})([\pL\pN]{0,})#([\pL\pN]{1,})$/u"));
		if(!filter_input(INPUT_POST, "input_string", FILTER_VALIDATE_REGEXP, $options)) {
			echo "<h2>Huomio!</h2><p>Syöttämäsi arvo <strong>{$_POST['input_string']}</strong> ei ollut missään suhteessa validi!</p>";
		}
		else {
			echo "	<h2>Kiitos</h2><p>Antamasi arvo <strong>{$_POST['input_string']}</strong> oli validi <strong>battletagi</strong></p>";
		}

		echo "	<p>Se validoitiin seuraavalla regex-filtterillä</p>
				<pre>" . $options['options']['regexp'] . " </pre>" . PHP_EOL;
	}


	?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" accept-charset="UTF-8">
		<p>Syötä battletagi</p>
		<input type="text" name="input_string" placeholder="type your input">
		<input type="submit" value="Send">
	</form>
</body>
</html>