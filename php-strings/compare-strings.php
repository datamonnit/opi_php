<?php
if (isset($_GET['btn_save'])) {
    $pwd1 = $_GET['pwd1'];
    $pwd2 = $_GET['pwd2'];

    if ($pwd1 != $pwd2) {
        die('Passwords did not match!');
    } else {
        die('Password match!');
    }
}
?>
<html>
<head>
    <title>Insert new user</title>
</head>
<body>

    <h1>Insert new user</h1>

    <form method="GET" 
          action="<?php echo $_SERVER['PHP_SELF']; ?>">

        <label for="username">Username</label><br>
        <input type="text" name="username"><br>

        <label for="pwd1">Password</label><br>
        <input type="text" name="pwd1"><br>

        <label for="pwd2">Password again</label><br>
        <input type="text" name="pwd2"><br>

        <input type="submit" name="btn_save" value="Save">
    </form>
</body>
</html>