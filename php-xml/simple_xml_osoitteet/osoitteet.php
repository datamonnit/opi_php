<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osoitteet</title>
</head>
<body>
    <h1>Osoitteet XML-tiedostota</h1>
    <p>
        <a href="lomake.html">Lisää uusi</a>
    </p>
    <?php $xml = simplexml_load_file('data.xml'); ?>
    <?php foreach ($xml->rivi as $osoite): ?>
        <div>
            <ul>
                <li><?php echo $osoite->nimi; ?></li>
                <li><?php echo $osoite->puhelin; ?></li>
                <li><?php echo $osoite->osoite->katu; ?></li>
                <li><?php echo $osoite->osoite->postinumero . " " . $osoite->kaupunki; ?></li>
            </ul>
        </div>
    <?php endforeach; ?>


</body>
</html>