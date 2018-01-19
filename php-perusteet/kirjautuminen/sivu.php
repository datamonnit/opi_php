<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_SESSION['nimi'])) {
        echo 'Sinulla ei ole lupaa olla täällä!';
        echo '<a href="login.php">Kirjaudu</a>';
    } else {
        echo "Mukava kun tulit " . $_SESSION['nimi'];
    }
    ?>
    <a href="logout.php">Kirjaudu ulos</a>
</body>
</html>