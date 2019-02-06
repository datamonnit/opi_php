<?php
session_start();
if (!isset($_POST['nimi'])) {
    header('Location: login.php');
    die();
} 


$_SESSION['logged_in'] = 'yes';
$_SESSION['nimi'] = $_POST['nimi'];

header('Location: ok.php');



