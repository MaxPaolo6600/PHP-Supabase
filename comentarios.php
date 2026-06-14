<?php
include_once("./assets/components/Header.php");

$api = $url . "/posts?select=*";

$headers = [
    "apikey: $key",
    "Authorization: Bearer $key",
    "Content-Type: application/json"
];

$ch = curl_init($api);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
curl_close($ch);
$posts = json_decode($response, true);
?>

<main>
    <section>
        <h2 class="comentarioText">Comentarios recebidos:</h2>
        <div id="lista-comentarios">
            <?php
            if (!empty($posts)) {
                foreach ($posts as $post) {
            ?>
                    <div class="card">
                        <h3><?= htmlspecialchars($post["email"]) ?></h3>
                        <p><?= htmlspecialchars($post["mensagem"]) ?></p>
                    </div>
            <?php
                }
            } else {
                echo "<p>Nenhum comentário encontrado.</p>";
            }
            ?>
        </div>
    </section>
</main>

<?php
include_once("./assets/components/Footer.php");
?>