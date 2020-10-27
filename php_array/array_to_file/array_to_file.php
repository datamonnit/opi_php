<?php

$rows = Array('rivi1', 'rivi2', 'rivi3');
var_dump($rows);

$file_rows = file('rivit.txt');
var_dump($file_rows);

unset($file_rows[1]);
var_dump($file_rows);

$file_string = implode("", $file_rows);
var_dump($file_string);

file_put_contents('rivit.txt', $file_string);
