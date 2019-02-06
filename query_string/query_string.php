<p>
    <a href="?nimi=tuomas&ika=40">Tuomas</a>
    <a href="?nimi=masa&ika=22">Masa</a>
</p>

<?php

if (isset($_GET['malli'])) {
    echo "<p>{$_GET['malli']}</p>";
}


foreach ($_GET as $key=>$param) {
    echo $key . ":" . $param . "<br>";
}