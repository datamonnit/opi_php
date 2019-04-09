<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lisää käyttäjä</title>
</head>
<body>
    <h1>Lisää käyttäjä</h1>
    <form action="insert.php" method="post">
        <label for="nimi">Nimi</label>
        <input type="text" name="nimi" placeholder="nimi">
        <br>
        <label for="nimi">Salasana</label>
        <input type="text" name="salasana" placeholder="salasana">
        <br>
        <label for="nimi">Email</label>
        <input type="text" name="email" placeholder="email">
        <br>
        <input type="submit" value="Tallenna">
    </form>
</body>
</html>