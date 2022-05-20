<?php

// Check url
$allowed_urls = ['localhost'];
$data = json_decode(file_get_contents('php://input'), true);

$to = isset($data['to']) ? $data['to'] : "tuomas.puro@esedu.fi";
$subject = isset($data['subject']) ? $data['subject'] : "No subject provided!";
$message = isset($data['message']) ? $data['message'] : "No message provided!";
$headers = 
    'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'Content-Type: text/plain; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (!in_array($_SERVER['HTTP_HOST'],$allowed_urls)){
    $data = array(
        'error' => 'Not allowed!',
        'host' => $_SERVER['HTTP_HOST'],
        'http-connection' => $_SERVER['HTTP_CONNECTION'],
        'request-uri' => $_SERVER['REQUEST_URI']
    );
    
} else {
    $to = isset($data['to']) ? $data['to'] : "tuomas.puro@esedu.fi";
    $subject = isset($data['subject']) ? $data['subject'] : "No subject provided!";
    $message = isset($data['message']) ? $data['message'] : "No message provided!";
    $headers = 
        'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'Content-Type: text/plain; charset=utf-8' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $additional_params = "";
    if (mail($to, $subject, $message, $headers, $additional_params)){
        $data = array(
            'success' => "Viesti lähetetty!",
            'to' => $to,
            'subject' => $subject,
            'message' => $message
            
        );
    } else {
        $data = array(
            'error' => "Viesti lähetettäminen epäonnistui!"
        );
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);