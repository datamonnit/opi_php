<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Check user input</h1>
	

	<?php
	if (!empty($_POST['battletag'])) {
		$options = array("options"=>array("regexp"=>"/^(\pL{1})([\pL\pN]{0,6})#([\pL\pN]{1,6})$/u"));
		if(!filter_input(INPUT_POST, "battletag", FILTER_VALIDATE_REGEXP, $options)) {
			echo "<h2>Syöttämäsi arvo ei ollut oikea!";
		}
		else {
			echo "<h2>Kiitos</h2>";
		}
	}
	?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="battletag" placeholder="type your battletag name#tag">
		<input type="submit" value="Send">
	</form>
</body>
</html>