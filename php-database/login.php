<?php

if (!isset($_POST['submit'])) {
    die("Et tullut lomakkeelta!");
}

include "pdo-connect.php";

$login_name = $_POST['username'];
$login_password = $_POST['password'];

// Create prepared statement with SELECT query
$stmt = $conn->prepare("SELECT * FROM kayttajat WHERE nimi = :nimi"); 
$stmt->bindParam(':nimi', $login_name);
$stmt->execute();

// Get results
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();

// Tarkistetaan, löytyikö yksi käyttäjä
if (count($rows) != 1) {
    die("Käyttäjää ei löydy!");
}

// Tarkistetaan täsmääkö salasana
if ($rows[0]['salasana'] != $login_password) {
    die("Salasana oli väärä");
}

echo "Kirjautuminen onnistui";





