<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP-lomake-demo</title>
    <style>
    table {
        border-collapse: collapse;
    }
    th, td {
        border-bottom: 1px solid #ddd;
        padding: 5px 10px;
        min-width: 150px;
        text-align: left;
    }
    </style>
</head>
<body>
    <h1>Ilmoittaudu tästä</h1>
    <form action="scripti.php" method="POST">
        <label for="nimi">Nimi</label>
        <input type="text" name="nimi">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>
        <label for="puhelin">Puhelin</label>
        <input type="text" name="puhelin">
        <br>
        <input type="submit" value="Lähetä">
    </form>

    <h2>Ilmoittautuneet</h2>
    <div>
        <?php
        $file = fopen('ilmoittautumiset.txt','r');
        echo "<table>";
        echo "<tr><th>Nimi</th><th>Email</th><th>Puhelin</th></tr>";
        while(($line = fgetcsv($file, 0, ";")) !== FALSE){
            echo "<tr><td>".$line[0]."</td><td>".$line[1]."</td><td>".$line[2]."</td></tr>";
        }
        echo "</table>";
        
        ?>
    </div>
</body>
</html>