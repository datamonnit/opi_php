<?php

if (isset($_POST['nappi'])){
    echo '<p>lähetit lomakkeen</p>';
} else {
    header('Location: lomake.html');
    die();
}

// Avataan tiedosto
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

// Muodostetaan rivi POST-parametreista
// $rivi = 'Nimi: ' . $_POST['nimi'] . ';Ikä:' . $_POST['ikä'] . PHP_EOL;
$rivi = "Nimi:  {$_POST['nimi']} ;Ikä: {$_POST['ikä']}" . PHP_EOL;
fwrite($myfile, $rivi); // Kirjoitetaan rivi

fclose($myfile);

echo 'Yritettiin kirjoittaa tiedostoon rivi : ' . $rivi;

