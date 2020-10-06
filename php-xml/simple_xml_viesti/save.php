<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    die('Illega action');
}

if (!isset($_POST['new_message_btn'])) {
    die('Another illegal action!');
}

$sender = htmlspecialchars($_POST['lahettaja']);
$topic = htmlspecialchars($_POST['aihe']);
$message = htmlspecialchars($_POST['teksti']);
$time = date("j.n.Y G:i:s");

$xml = simplexml_load_file('data/data.xml');

$new_node = $xml->addChild('viesti');
$new_node->addAttribute('piilota','false');
$new_node->addChild('lähettäjä', $sender);
$new_node->addChild('aihe', $topic);
$new_node->addChild('teksti', $message);
$new_node->addChild('aika', $time);

// Muotoilu ja tallennus
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('data/data.xml');

