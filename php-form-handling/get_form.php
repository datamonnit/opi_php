<?php
/**
 * Tarkistetaan, kannattaako jatkaa tallennusta
 */
if (!isset($_POST['save'])) {
    echo "Et tullut lomakkeelta!";
    die();
}

/**
 * Tarkistetaan täsmäävätkö annetut salasanat
 */
if ($_POST['password'] != $_POST['password_confirm']) {
    echo ('Salsanat eivät täsmää! Ei voida tallentaa!');
    die();
}

// Tallennetaan
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$rivi = $_POST['first_name'] . ";" . $_POST['last_name'] . ";" . $_POST['password'] . PHP_EOL;
fwrite($myfile, $rivi);
fclose($myfile);

// Siirrytään toiselle sivulle
header("Location: show_names.php");