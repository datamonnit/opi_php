<?php
include 'db.php';

$id = $_GET['id'];

$sql = "UPDATE ostokset SET maara = maara+1 WHERE id=$id";

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