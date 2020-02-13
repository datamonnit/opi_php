<?php
/* 
Avataan JSON-tiedosto ja palautetaan php-arrayna
*/
function openJSON($json_file){
    $JSONstring = file_get_contents($json_file);
    $JSONarray = json_decode($JSONstring, true);
    return $JSONarray;
}

/* 
Tulostetaan JSON-tiedosto
*/
function printJSON($file_name) {
    $data = openJSON($file_name);
    foreach ($data as $key => $item){
        echo $item["username"] . " : " . 
             $item["plaintext"] . " : " . 
             $item["password"] . " : " . 
             $item["algorithm"] . "<br>";
    }
}

function savePlainTextUser($file_name, $new_data){
    $data = openJSON($file_name);
    array_push($data, $new_data);
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file_name, $data);
}