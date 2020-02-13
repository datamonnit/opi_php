<?php
function openJSON($json_file){
    $JSONstring = file_get_contents($json_file);
    $JSONarray = json_decode($JSONstring, true);
    return $JSONarray;
}

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


//  Check login
if (isset($_POST['login'])) {

    if ( !empty($_POST['username'])) {

    
        $data = openJSON("users.json");

        foreach($data as $item){
            if ($_POST['username'] == $item['username']) {
                switch ($item['algorithm']) {
                    case "crypt-md5":
                        if (crypt($_POST['password'], '$1$somethig') == $item['password']){
                            echo "<h2>Kirjautuminen onnistui</h2>";
                        } else {
                            echo "<h2>Kirjautuminen epäonnistui!</h2>";
                        }
                        break;
                    case "crypt-blowfish":
                        if (crypt($_POST['password'], '$2a$07$anexamplestringforsal') == $item['password']){
                            echo "<h2>Kirjautuminen onnistui</h2>";
                        } else {
                            echo "<h2>Kirjautuminen epäonnistui!</h2>";
                        }
                        break;
                }
                
                echo "<h3>Löytyi!</h3>";
            }
        }

    }

}


// Save plain text passwords
if (isset($_POST['save'])) {
    
    echo "<h2>Plain Text Passwords</h2>";
    
    // Check if username is not empty
    if ( !empty($_POST["username"]) ) {

        switch ($_POST["algorithm"]) {
            case 'crypt-md5':
                $password_hash = crypt($_POST["password"], '$1$somethig' );
                break;
            case 'crypt-blowfish':
                // salt starts with $2a$ and cost parameter 09
                $password_hash = crypt($_POST["password"], '$2a$07$anexamplestringforsalt' );
                break;
            default:
                $password_hash = $_POST["password"];
                break;
        }

        $data = array(
            "username" => $_POST["username"],
            "plaintext" => $_POST["password"],
            "password" => $password_hash,
            "algorithm" => $_POST["algorithm"]
        );
        
        savePlainTextUser("users.json", $data);
    }
}