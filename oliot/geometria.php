<?php

// Ladataan luokka
include "Geometria_class.php";

// Luodaan uusi luokan ilmentymä eli objekti
$ympyra = new Geometria();

// Kutsutaan objektin metodia ympyran_ala
echo "<p>Ympyrän ala on " . $ympyra->ympyran_ala(15) . "</p>";
