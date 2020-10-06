<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New message</title>
    <style>
    .form-group label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
    }
    </style>
</head>
<body>
    <h1>New Message</h1>
    <form action="save.php" method="post">
        <div class="form-group">
            <label for="lahettaja">Sender</label>
            <input type="text" name="lahettaja">
        </div>
        <div class="form-group">
            <label for="aihe">Topic</label>
            <input type="text" name="aihe">
        </div>
        <div class="form-group">
            <label for="teksti">Message</label>
            <textarea name="teksti" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" name="new_message_btn" value="Send">
    </form>
</body>
</html>