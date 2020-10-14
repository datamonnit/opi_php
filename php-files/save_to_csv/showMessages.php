<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
</head>
<body>
    <?php
    $file = fopen('viestit.txt','r'); // Avataan tiedosto
    ?>
    
    <?php while (!feof($file)):
        $row = fgetcsv($file, 0, ','); 
    ?>
        <div>
            <h2><?php echo $row[0]; ?></h2>
            <p><?php echo $row[1]; ?></p>
        </div>        
    
    <?php endwhile; ?>
  
</body>
</html>