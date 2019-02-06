<?php
/* 
ok.php 
Tämä sivu näytetään vain kirjautuneelle käyttäjälle
*/
session_start();

// Jos ei kirjautunut, ohjataan login-sivulle
if ( !isset($_SESSION['logged_in']) || 
     $_SESSION['logged_in'] == 'no' ) {
         
        header('Location: login.php');

}
?>
<meta charset="UTF-8">

<?php include 'valikko.inc.php'; ?>

<h1>Tervetuloa <?php echo $_SESSION['nimi']; ?></h1>
<p>Olet sisällä!</p>
<p><a href="logout.php">Kirjaudu ulos</a></p>
