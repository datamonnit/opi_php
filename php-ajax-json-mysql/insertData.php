<?php
include 'db.php';

$tuote = $_POST['tuote'];
$maara = $_POST['maara'];

$sql = "INSERT INTO ostokset (tuote, maara) VALUES ('$tuote', $maara);";

if ($conn->query($sql)) {
    $data = array(
        'status' => 'ok'
    );
} else {
    $data = array(
        'status' => 'error'
    );
}

header('Content-Type: application/json;charset=utf-8');  
echo json_encode($data);