<?php
include_once("./assets/data/data.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body class="cadsBody">
    <div class="cadsCard">
        <h2 class="cadsText">Cadastrar Usuário</h2>
        <form action="php/cadastrar.php" method="POST" class="cadsInputs">
            <input
                type="text"
                name="nome"
                placeholder="Nome"
                required
                class="cadsInput">
            <input
                type="email"
                name="email"
                placeholder="Email"
                required
                class="cadsInput">
            <input
                type="password"
                name="senha"
                placeholder="Senha"
                required
                class="cadsInput">
            <button type="submit" class="cadsInputCad">
                Cadastrar
            </button>
        </form>
    </div>
</body>

</html>