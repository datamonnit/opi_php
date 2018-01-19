<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    $_SESSION['user'] = 'Jaakko';
    echo 'Sessio-muuttuja on asetettu!';
    print_r($_SESSION);
    echo $_SESSION['user'];
    ?>

    <a href="session_esim2.php">Toiselle sivulle</a>
</body>
</html>