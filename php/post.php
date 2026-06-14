<?php
include_once("../assets/data/data.php");

$mensagem = $_POST["mensagem"];
$email = $_POST["email"];

$dados = json_encode([
    "mensagem" => $mensagem,
    "email" => $email
]);

$options = [
    "http" => [
        "method" => "POST",
        "header" =>
        "apikey: $key\r\n" .
            "Authorization: Bearer $key\r\n" .
            "Content-Type: application/json\r\n" .
            "Prefer: return=representation\r\n",
        "content" => $dados
    ]
];

$context = stream_context_create($options);
$urlPost = $url . "/posts";
$resultado = file_get_contents($urlPost, false, $context);

header("Location: ../comentarios.php");
exit;
?>