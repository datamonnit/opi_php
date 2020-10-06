<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Ei asiaa tänne!');
}

// Otetaan tiedot lomakkeelta talteen
$nimi = htmlspecialchars($_POST['nimi']);
$puhelin = htmlspecialchars($_POST['puhelin']);
$katu = htmlspecialchars($_POST['katu']);
$postinumero = htmlspecialchars($_POST['postinumero']);
$kaupunki = htmlspecialchars($_POST['kaupunki']);


try {
    // Avataan xml-tiedosto
    define('XML_FILE', 'data.xml');
    $xml = simplexml_load_file(XML_FILE);

    // Luodaan uusi node
    $uusi_rivi = $xml->addChild('rivi');
    $uusi_rivi->addChild('nimi', $nimi);
    $uusi_rivi->addChild('puhelin', $puhelin);
    $uusi_osoite = $uusi_rivi->addChild('osoite');
    $uusi_osoite->addChild('katu', $katu);
    $uusi_osoite->addChild('postinumero', $postinumero);
    $uusi_osoite->addChild('kaupunki', $kaupunki);

    // Tallennus kauniissa muodossa
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save(XML_FILE);
} catch(Exception $e) {
    echo "Message: " . $e->getMessage(); 
} finally {
    header("Location: osoitteet.php");
}

