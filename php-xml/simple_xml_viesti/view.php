<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestit</title>
</head>
<body>
    <h1>Viestit</h1>
    <ul>

    <?php
    $xml = simplexml_load_file('data/data.xml');
    $i = 0;
    ?>

    <?php foreach ($xml->viesti as $viesti): ?>
        <?php if ($viesti->attributes()['piilota'] == "false"): ?>
            <li><?php echo $viesti->lähettäjä; ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>