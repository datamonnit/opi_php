<h1>Regex-php</h1>
<style>
	.fail {color: red;}
	.tsekkaa {
		border: 1px solid black;
		padding: 10px;
		margin: 10px;
	}
</style>
<?php
$pregexes = array(
	'/^(\pL{1})([\pL\pN]{0,})#([\pL\pN]{1,})$/u', // \pL = Unicode-kirjain \pN = unicode-numero
	'/^(foo)(#)(bar)$/',
	'/^([p{L}A-Za-z]{1})([A-Za-z0-9]{1,12})(#)([A-Za-z1-9]{1,})$/'
);

$tobetested = array(
	"ö",
	"5#bar",
	"ö#bar",
	"fdd#bardddd",
	"d66f6#bardddd",
	"Ölli#ssdd", 
	"f123#sdfsfs",
	"@dfsfs",
	"foo",
	"1mies#battle",
	"ömies#battle",
	"mies1#bar"
);

$index = 0;

?>

<?php foreach($pregexes as $pregex): ?>
	<div class="tsekkaa">
	<h2>Check no. <?php echo ++$index; ?></h2>
	<?php
	echo "<pre>$pregex</pre>";
	foreach ($tobetested as $string)
	if (preg_match($pregex, $string)) 
	{
		echo "$string<br>";
	}
	else
	{
		echo "<span class=\"fail\">$string</span><br>";
	}
	?>
	</div>
<?php endforeach; ?>