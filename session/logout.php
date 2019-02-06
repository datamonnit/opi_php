<?php
/* 
logout.php
Uloskirjautuminen tapahtuu täällä
ohajtaan käyttäjä logged_out -sivulle
*/
session_start();
session_destroy();
$_SESSION = array();
header('Location: logged_out.php');