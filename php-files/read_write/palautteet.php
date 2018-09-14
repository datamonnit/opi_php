<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");

echo "<ul>";
while(!feof($myfile)) {
    $rivi = fgets($myfile) . "<br>";
    $riviarray = explode(';', $rivi);
    if (count($riviarray) == 2) {
        echo "<li><strong> $riviarray[0]</strong> : $riviarray[1] </li>";
    }
    
}
echo "</ul>";

fclose($myfile);