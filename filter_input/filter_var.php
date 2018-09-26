<?php

$email1 = "tesdsi.testaaja .com";
$email2 = "tessi.testaaja@gmail.com";

echo "<p>";
echo $email1 . "<br>";
if (filter_var($email1, FILTER_VALIDATE_EMAIL)){
    echo "OK";
} else {
    echo "Ei OK";
} 
echo "</p>";

echo "<p>";
echo $email2 . "<br>";
if (filter_var($email2, FILTER_VALIDATE_EMAIL)){
    echo "OK";
} else {
    echo "Ei OK";
} 
echo "</p>";