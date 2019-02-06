<?php
session_start();
if ( !isset($_SESSION['logged_in']) || 
     $_SESSION['logged_in'] == 'no' ) {
         
        header('Location: login.php');

}
?>
<meta charset="UTF-8">
<h1>Tervetuloa <?php echo $_SESSION['nimi']; ?></h1>
<p>Olet sisällä!</p>
<p><a href="logout.php">Kirjaudu ulos</a></p>
