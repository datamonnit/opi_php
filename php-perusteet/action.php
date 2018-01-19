<?php
if (!isset($_GET['toiminto'])) 
    {
        $toiminto = 'suksi kuuseen';
    }
else 
    {
    $toiminto = $_GET['toiminto'];
    }

switch ($toiminto) {
    case 'poisto':
        echo "Poistetaan jotain";
        break;
    case 'piilota':
        echo "Piiloitetaan jotain";
        break;
    default:
        echo "Ei tehdä mitään";
}