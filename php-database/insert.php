<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo_lista";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

// prepare and bind
$stmt = $conn->prepare("INSERT INTO kayttajat (nimi, salasana, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nimi, $salasana, $email);

// set parameters and execute
$nimi = $_POST['nimi'];
$email = $_POST['email'];
$salasana = $_POST['salasana'];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
