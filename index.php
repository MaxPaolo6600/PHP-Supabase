<?php
include_once("./assets/components/Header.php");
?>

<main>
    <section>
        <h2 class="titulo">O Rally é uma modalidade de automobilismo em que pilotos e
            navegadores competem percorrendo trechos
            cronometrados em estradas abertas ou fechadas, muitas vezes em terrenos difíceis como<span> terra, lama,
                neve ou cascalho</span>
        </h2>
    </section>
    <section>
        <h4>
            Link da fonte ultilizada: <span><a href="https://fonts.google.com/specimen/Orbitron">Aqui</a></span>
        </h4>
        <div class="card1">
            <div class="cardImg">
                <img src="./assets/img/img1.jpg" alt="grupoB" class="imgRally">
                <h4>Grupo B Rally</h4>
            </div>
            <a href="<?= BASE_URL ?>grupoB.php">Ver mais</a>
        </div>
        <div class="card1">
            <div class="cardImg">
                <img src="./assets/img/img2.png" alt="wrc" class="imgRally">
                <h4>WRC Rally</h4>
            </div>
            <a href="<?= BASE_URL ?>wrc.php">Ver mais</a>
        </div>
        <div class="card1">
            <div class="cardImg">
                <img src="./assets/img/img3.png" alt="rally1" class="imgRally">
                <h4>Grupo 1 Rally</h4>
            </div>
            <a href="<?= BASE_URL ?>rally1.php">Ver mais</a>
        </div>
    </section>
</main>

<?php
include("./assets/components/Footer.php")
?>