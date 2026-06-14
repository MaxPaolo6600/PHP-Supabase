<footer>
    <h2>© Max Paolo Ltda.</h2>
    <div class="form1">
        <h4>Algum comentário sobre o site? Envie aqui:</h4>
        <form action="<?= BASE_URL ?>php/post.php" method="POST">
            <textarea class="inputFooter" type="text" placeholder="Comentário" name="mensagem"></textarea>
            <input class="inputFooter" type="email" placeholder="E-mail" name="email">
            <button class="btnFooter" type="submit">Enviar</button>
        </form>
    </div>
</footer>
</body>

</html>