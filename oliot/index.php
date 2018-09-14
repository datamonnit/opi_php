<?php

include_once 'Auto_class.php';
include_once 'Urheiluauto_class.php';

$mersu = new Auto();
$ford = new Auto();
$ferrari = new Urheiluauto();

$autot = array($mersu, $ford, $ferrari);


$ferrari->setMerkki('Ferrari');
$ferrari->setVari('valkoinen');
$ferrari->setHuippunopeus('320km/h');
$ferrari->hinta = 1000000;

$mersu->setMerkki('Mersu');
$mersu->setVari('punainen');
$mersu->hinta = 1000;

$ford->setMerkki('Focus');
$ford->setVari('musta');
$ford->hinta = 12000;

foreach ($autot as $auto) {
    echo $auto->autonTiedot();
    echo "$auto->tarjousHinta(20);
}