<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM ostokset WHERE id = $id;";

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