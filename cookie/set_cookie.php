<?php
    $msg = "";
    
    if (isset($_GET['id'])) {
    
        if (!isset($_COOKIE['klikattu'])) {
            $klikattu[$_GET['id']] = $_GET['name']; 
            setcookie('klikattu', json_encode($klikattu), time() + 3600);
        } else {

            $klikattu = json_decode($_COOKIE['klikattu'], true);

            if (in_array($_GET['name'],$klikattu)) {
                $msg = "Et saa enää äänestää vaihtoehtoa {$_GET['name']}!";
            } else {
                $msg = "";
                $klikattu[$_GET['id']] = $_GET['name'];
                setcookie('klikattu', json_encode($klikattu), time() + 3600);
            }
            
            
        }
    } 
?>
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