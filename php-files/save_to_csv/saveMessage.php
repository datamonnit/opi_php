<?php

if ($_SERVER['REQUEST_METHOD'] != "POST"){
    die("Virhe!");
}

if (!isset($_POST['nimi']) || !isset($_POST['viesti'])){
    die("Toinen virhe!");
}

// Putsataan html-koodit
$nimi = htmlspecialchars($_POST['nimi']);

// Putsataan html-koodit ja korvataan rivinvaihdot <br>-tageilla
$viesti = htmlspecialchars($_POST['viesti']);
$viesti = str_replace(PHP_EOL, "<br>", $viesti);

// Muodostetaan rivi
$rivi = "$nimi,$viesti," . date("Y-m-d") . PHP_EOL;

// Kirjoitetaan rivi pilkkuerotettuun tiedostoon
$file = fopen("viestit.txt","a");
fwrite($file, $rivi);
fclose($file);

// Kirjoitetaan rivi html-tiedostoon
$rivi = "<div class=\"viesti\">$nimi<br>$viesti</div>";
$file = fopen("viestit.html","a");
fwrite($file, $rivi);
fclose($file);

header('Location: showMessages.php');