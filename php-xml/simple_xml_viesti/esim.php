<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
    <style>
    .oma {
        color: red;
    }
    </style>
</head>
<body>
    <h1>Viestit</h1>
    

    <?php
    $xml = simplexml_load_file('data/data.xml');
    $i = 0;
    ?>
    <ul>
    <?php foreach($xml->viesti as $viesti): ?>
        <li>
            <h2 class="oma"><?php echo $viesti->lähettäjä; ?></h2>
            <?php echo $viesti->aihe; ?>
        </li>
    <?php endforeach; ?>
    </ul>
   
</body>
</html>