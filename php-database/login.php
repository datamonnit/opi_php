<?php

if (!isset($_POST['submit'])) {
    die("Et tullut lomakkeelta!");
}

include "pdo-connect.php";

$login_name = $_POST['username'];

// Create prepared statement with SELECT query
$stmt = $conn->prepare("SELECT * FROM kayttajat WHERE nimi = :nimi"); 
$stmt->bindParam(':nimi', $login_name);
$stmt->execute();

// Get results
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();

if (count($rows) != 1) {
    die("Käyttäjää ei löydy!");
}





