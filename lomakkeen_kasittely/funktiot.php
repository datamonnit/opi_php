<?php

/* 
Tallennetaan rivi tiedstoon
    $file_name on tiedoston nimi, johon tallennetaan
    $rivi on merkkijono, joka halutaan tallentaa
*/
function tallennaRivi($file_name, $rivi){
    $file = fopen($file_name,"a") 
        or die("Tiedostoa ei voi avata!");
    
    fwrite($file, $rivi);
    fclose($file);
}