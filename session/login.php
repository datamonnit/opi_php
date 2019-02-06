<?php
/* 
login.php
Tämä skripti näyttää kirjatuneelle käyttäjälle lomakkeen
*/
session_start();

// Kirjautunut käyttäjä ei pääse kirjautumissivulle
if ( isset($_SESSION['logged_in']) ) {
    header('Location: ok.php');
    die();
}

// Oletuksena logged_in = no
// ja näytetään kirjautumislomake
$_SESSION['logged_id'] = 'no';
?>
<meta charset="UTF-8">

<?php include 'valikko.inc.php'; ?>

<h1>Tervetuloa</h1>
<form method="POST" action="check_login.php">
    <label for="nimi">Nimi:</label><br>
    <input type="text" name="nimi"><br>
    <input type="submit" name="submit" value="Lähetä">
</form>
