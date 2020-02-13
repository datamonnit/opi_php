<?php
// How to delete a file in a sibling directory
// 
// .
// └── folder
//     ├── app_folder
//     │   └── this-file.php
//     └── data_folder
//         └── file-to-delete.txt

// Get the root path of server
define("ROOT_DIR", realpath($_SERVER['DOCUMENT_ROOT']));

// Get the path of this file and go up one level
define("FILE_PATH", dirname($_SERVER['PHP_SELF']), 2);

// Combine ROOT_DIR and FILE_PATH
$real_path = ROOT_DIR . FILE_PATH;

// Add subfolder and file
$final_path = $real_path."\\some_files\\file.txt";

unlink($final_path);