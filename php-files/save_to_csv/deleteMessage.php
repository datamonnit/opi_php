<?php
if (!isset($_GET['line'])) {
    die('Error!');
}
$file_name = 'viestit.txt';

$line = intval($_GET['line']);

$rows = file($file_name);
var_dump($rows);
unset($rows[$line]);
var_dump($rows);

file_put_contents($file_name, implode("", $rows));

header('Location: showMessages.php');