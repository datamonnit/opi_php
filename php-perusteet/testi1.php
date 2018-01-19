<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Sivun otsikko"; ?></title>
</head>
<body>
    <form action="doit.php" method="get">
        <input name="nimi" type="text" placeholder="Anna nimesi">
        <input name="nappi" type="submit" value="Lähetä">
    </form>
    <p>
        <a href="action.php?toiminto=poisto">poista</a>
        <a href="action.php?toiminto=piilota">piilota</a>
    </p>
    <form action="sendform.php" method="post">
        <input type="text" name="etunimi" placeholder="etunimi">
        <input type="text" name="sukunimi" placeholder="sukunimi">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="osoite" placeholder="osoite">
        <input type="submit">
    </form>
</body>
</html>

