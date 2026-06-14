<?php
session_start();

include_once("../assets/data/data.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senhaOriginal = $_POST["senha"];
$senhaHash = password_hash($senhaOriginal, PASSWORD_DEFAULT);

$dados = json_encode([
    "nome" => $nome,
    "email" => $email,
    "senha" => $senhaHash
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
$urlCadastro = $url . "/usuarios";
$resultado = file_get_contents($urlCadastro, false, $context);

if ($resultado !== false) {
    $_SESSION["usuario"] = [
        "nome" => $nome,
        "email" => $email
    ];
    header("Location: ../index.php");
    exit;
} else {
    echo "Erro ao cadastrar usuário.";
}
?>