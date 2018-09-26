<?php
include 'db.php';

$sql = "SELECT id, tuote, maara FROM ostokset;";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data['error'] = "Ei tuotteita";
}


header('Content-Type: application/json;charset=utf-8');  
echo json_encode($data);