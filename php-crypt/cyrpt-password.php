<?php include "my-crypt-functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Crypt -example</title>
    <style>
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .row { clear: both; width: 100%; margin: 20px 0; }
    .col { width: 50%; float: left;}

    </style>
</head>
<body>
<h1>Saving passwords</h1>
<div class="row clearfix">
    <div class="col">
        <h2>Register</h2>    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" id="password"><br>
            <select name="algorithm" id="algorithm">
                <option value="crypt-md5">MD5</option>
                <option value="crypt-blowfish">Blowfish</option>
            </select>

            <input type="submit" name="save" value="Save">
        </form>
    </div>
    <div class="col">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username"><br>
            <label for="password">Password</label><br>
            <input type="text" name="password" id="password"><br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</div>
    
<div class="row">
    <h2>Current users</h2>    
        <?php
            // Print users
            printJSON("users.json");
        ?>
</div>

</body>
</html>