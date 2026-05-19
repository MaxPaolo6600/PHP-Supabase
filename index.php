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
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Posts do Supabase</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background: #f5f5f5;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <h1>Posts</h1>
    <?php foreach ($data as $post): ?>
        <div class="card">
            <h3>ID: <?= $post['id'] ?></h3>
            <p>
                Título:
                <?= $post['titulo_post'] ?>
            </p>
        </div>
    <?php endforeach; ?>
</body>

</html>