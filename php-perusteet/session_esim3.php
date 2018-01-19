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
    echo "Edelleen käyttäjä on " . $_SESSION['user'];
    $_SESSION['user'] = "Roope";
    ?>
    <a href="session_esim2.php">Takaisin toiselle sivulle</a>
    <a href="session_esim_lopeta.php">Lopeta sessio</a>
</body>
</html>