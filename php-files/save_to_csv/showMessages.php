<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
</head>
<body>
    <h1>Jätä uusi viesti</h1>
    <form action="saveMessage.php" method="POST">
        <label for="nimi">Nimi</label>
        <input name="nimi" type="text">
        <br>
        <label for="viesti">Viesti</label>
        <br>
        <textarea name="viesti" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="send" value="Lähetä">
    </form>

    <h2>Viesit</h2>

    <?php
    $file = fopen('viestit.txt','r'); // Avataan tiedosto
    $rowNumber = 0;
    ?>
    
    <?php while (!feof($file)):
        $row = fgetcsv($file, 0, ','); 
    ?>
        <?php 
        // Check if row is not empty
        if (isset($row[0])):?>
            <div>
                <h2><?php echo $row[0]; ?></h2>
                <p><?php echo $row[1]; ?></p>
                <a href="deleteMessage.php?line=<?php echo $rowNumber++; ?>">Poista</a>
            </div>
        <?php endif; ?>
            
    <?php endwhile; ?>
  
</body>
</html>