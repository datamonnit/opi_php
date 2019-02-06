<?php
/* 
check_login.php 
Tarkistetaan kirjautumistiedot
*/
session_start();

// Jos nimi-sessiomuuttujaa ei ole, ohjataan takaisin 
// kirjautumislomakkeelle.
if (!isset($_POST['nimi'])) {
    header('Location: login.php');
    die();
} 

// Asetetaan logged_in 'yes' ja nimi-muuttuja ja
// mennään ok-sivulle
$_SESSION['logged_in'] = 'yes';
$_SESSION['nimi'] = $_POST['nimi'];

header('Location: ok.php');



