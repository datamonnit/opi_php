<?php
if (!isset($_GET['i'])){
    die('Ei asiaa tänne');
}

$index = intval($_GET['i']);

// Avataan xml-tiedosto
define('XML_FILE', 'data.xml');
$xml = simplexml_load_file(XML_FILE);

unset($xml->rivi[$index]);

// Tallennus kauniissa muodossa
$dom = new DOMDocument('1.0');
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save(XML_FILE);

header('Location: osoitteet.php');