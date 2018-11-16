<?php
$myfile = fopen("newfile.txt", "r") or die("Ei voida avata tiedostoa");

while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}

fclose($myfile);