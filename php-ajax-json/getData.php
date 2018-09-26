<?php
include 'db.php';
$sql = "SELECT id, tuote, maara FROM ostokset";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    $data['error'] = "ei tuloksia";
}

echo json_encode($data);

