<?php

$url = "https://dhocokkmmaffhzzaawuj.supabase.co/rest/v1/posts";

$key = "sb_publishable_GI6YJxAvY2sj1KrCIqxU9w_6AJZI8Xa";

$options = [
    "http" => [
        "header" =>
        "apikey: $key\r\n" .
            "Authorization: Bearer $key\r\n" .
            "Content-Type: application/json\r\n"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$data = json_decode($response, true);

define('BASE_URL', 'http://localhost:8000/');
?>