<?php
$user = array(
    'name' => 'John',
    'rank' => 'master',
    'age' => 50
);

var_dump($user);

$languages = array(
    'english' => 'excellent',
    'finnish' => 'good',
    'russian' => 'poor'
);

var_dump($languages);

$user['languages'] = $languages;

var_dump($user);

echo json_encode($user);


