<?php

include("./assets/data/data.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max´s Store</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <div class="header_opcao">
            <a href="#">opcao1</a>
            <a href="#">opcao1</a>
            <a href="#">opcao1</a>
        </div>
        <div class="header_nome">
            <h3>Max´s Store</h3>
        </div>
    </header>
    <main>
        <section>
            <form method="POST">
                <input type="text" id="numero" name="numero" require>
                <button type="submit">Enviar numero</button>
            </form>
            <?php
                $num = 0;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num = $_POST["numero"];
                }
                for ($i = 1; $i <= 10; $i++) {
                        $res = $i * $num;
                        echo "$num X $i = $res";
                        echo "</br>";
                    }
                ?>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>