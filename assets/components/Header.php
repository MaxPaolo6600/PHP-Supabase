<?php
session_start();
include_once("./assets/data/data.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-site</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>
    <header>
        <div class="nav">
            <a href="./index.php">
                <img src="./assets/img/logo2.png" alt="logo" class="logo">
            </a>
            <div class="navTab">
                <a href="<?= BASE_URL ?>index.php">
                    <h4 class="textNav">Home</h4>
                </a>
                <a href="<?= BASE_URL ?>grupoB.php">
                    <h4 class="textNav">GrupoB</h4>
                </a>
                <a href="<?= BASE_URL ?>wrc.php">
                    <h4 class="textNav">WRC</h4>
                </a>
                <a href="<?= BASE_URL ?>rally1.php">
                    <h4 class="textNav">Grupo 1</h4>
                </a>
                <a href="<?= BASE_URL ?>comentarios.php">
                    <h4 class="textNav">Comentários</h4>
                </a>
                <?php if (isset($_SESSION["usuario"])): ?>
                    <h4 class="textNavName">
                        <?= htmlspecialchars($_SESSION["usuario"]["nome"]) ?>
                    </h4>
                    <a href="<?= BASE_URL ?>php/logout.php" class="aSair">
                        <h4 class="textNavSair">Sair</h4>
                    </a>
                <?php else: ?>
                    <a href="<?= BASE_URL ?>cadastro.php">
                        <h4 class="textNav">Cadastrar</h4>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </header>