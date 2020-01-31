<?php

$root_dir = realpath($_SERVER['DOCUMENT_ROOT']);
echo "Root dir " . $root_dir . "<br>";

$path = dirname($_SERVER['PHP_SELF'],2);
echo "Path " .$path . "<br>";

$real_path = $root_dir . $path;
echo "Real path " .$real_path . "<br>";

// $final_path = str_replace("/", "\\", $real_path ) . "\\some_files\\file.txt";
$final_path = $real_path."\\some_files\\file.txt";
echo "Final path " .$final_path . "<br>";

// $path = $path . "/some_files/file.txt";
// $real_path = realpath($path);

// echo "real_path" . $real_path . "<br>";

unlink($final_path);