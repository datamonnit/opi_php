<?php

if ($_SERVER['REQUEST_METHOD'] != "POST"){
    die("Virhe!");
}

if (!isset($_POST['nimi']) || !isset($_POST['viesti'])){
    die("Toinen virhe!");
}

$nimi = htmlspecialchars($_POST['nimi']);
$viesti = htmlspecialchars($_POST['viesti']);

$rivi = "$nimi,$viesti," . date("Y-m-d") . PHP_EOL;

echo $rivi;

$file = fopen("viestit.txt","a");
echo fwrite($file, $rivi);
fclose($file);

$rivi = "<div class=\"viesti\">$nimi<br>$viesti</div>";
$file = fopen("viestit.html","a");
echo fwrite($file, $rivi);
fclose($file);