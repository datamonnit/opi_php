<?php
    session_start();
    
    if (isset($_COOKIE['clicked'])) {
        $_SESSION['clicked'] = $_COOKIE['clicked'];
    }

    $msg = "";
    
    
    // If user clicked one of the links with GET-params id and name
    if (isset($_GET['id']) && isset($_GET['name'])) {
    
        if (!isset($_COOKIE['clicked'])) {
            
            // If Cookie clicked is not set we set it 
            $klikattu[$_GET['id']] = $_GET['name'];
            $klikattu = json_encode($klikattu);

            setcookie('clicked', $klikattu, time() + 60);
            $_SESSION['clicked'] = $klikattu;


        } else {

            // If it is allready there we retrieve the value...
            $klikattu = json_decode($_COOKIE['clicked'], true);

            if (in_array($_GET['name'],$klikattu)) {

                // if name is allready found we give a message
                $msg = "You have allready clicked {$_GET['name']}!";


            } else {
                // We add clicked value to the cookie
                $msg = "You selected {$_GET['name']}.";
                $klikattu[$_GET['id']] = $_GET['name'];
                $klikattu = json_encode($klikattu);
                setcookie('clicked', $klikattu, time() + 3600);
                $_SESSION['clicked'] = $klikattu;

            }    
        }
    } 
?>
<h1>Cookie example</h1>

<h2>Current COOKIE-values:</h2>
<pre>
<?php 
if (count($_COOKIE) > 0) {

    foreach ($_COOKIE as $key=>$value){
        echo "$key => $value".PHP_EOL;
    }
 
} else {

    echo "No cookies set!";

}

?>
</pre>

<h2>Current SESSION-values:</h2>
<pre>
<?php 
if (count($_SESSION) > 0) {

    foreach ($_SESSION as $key=>$value){
        echo "$key => $value".PHP_EOL;
    }
 
} else {

    echo "No session values set!";

}

?>
</pre>

<p><?php echo $msg; ?></p>
<ul>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=1&name=kissa">Kissa</a>
    </li>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=2&name=koira">Koira</a>
    </li>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=3&name=apina">Apina</a>
    </li>
    <li>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=4&name=gorilla">Gorilla</a>
    </li>