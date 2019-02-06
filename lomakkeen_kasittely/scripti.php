<h1>Käsitellään lomake ...</h1>
<?php
  
// var_dump($_POST); 

if (isset($_POST['nimi'])){
    $nimi = $_POST['nimi'];
} else {
    die("Et täyttänyt lomaketta!");
}

$email = (isset($_POST['email']) || empty($_POST['email'])) ? $_POST['email'] : "ei sähköpostia"; 

$puhelin = (isset($_POST['puhelin']) || empty($_POST['puhelin'])) ? $_POST['puhelin'] : "ei puhelinnumeroa";

echo "<p>Nimi: $nimi<br>Email: $email<br>Puheiln: $puhelin</p>";

$data = "$nimi;$email;$puhelin" . PHP_EOL;

include_once("funktiot.php");

tallennaRivi("ilmoittautumiset.txt", $data);



