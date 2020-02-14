<?php
    $msg = "";
    
    // If user clicked one of the links with GET-params id and name
    if (isset($_GET['id']) && isset($_GET['name'])) {
    
        if (!isset($_COOKIE['clicked'])) {
            
            // If Cookie clicked is not set we set it 
            $klikattu[$_GET['id']] = $_GET['name']; 
            setcookie('klikattu', json_encode($klikattu), time() + 3600);

        } else {

            // If it is allready there we retrieve the value...
            $klikattu = json_decode($_COOKIE['klikattu'], true);

            if (in_array($_GET['name'],$klikattu)) {

                // if name is allready found we give a message
                $msg = "You have allready clicked {$_GET['name']}!";


            } else {
                // We add clicked value to the cookie
                $msg = "You selected {$_GET['name']}.";
                $klikattu[$_GET['id']] = $_GET['name'];
                setcookie('klikattu', json_encode($klikattu), time() + 3600);

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

<p><?php echo $msg; ?></p>
<ul>
    <li>
        <a href="set_cookie.php?id=1&name=kissa">Kissa</a>
    </li>
    <li>
        <a href="set_cookie.php?id=2&name=koira">Koira</a>
    </li>
    <li>
        <a href="set_cookie.php?id=3&name=apina">Apina</a>
    </li>
    <li>
        <a href="set_cookie.php?id=4&name=gorilla">Gorilla</a>
    </li>