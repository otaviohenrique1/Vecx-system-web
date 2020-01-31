<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Testa Index</title>
    </head>
    <body>
        <div class="container">
            <h1>Testa Index</h1>
            <?php
                echo "<p class='alert alert-success'>Teste mensagem</p>";
            ?>
            <!-- <form action="testa_validacao_campos.php" method="post">
                <input type="text" name="campo_texto" id="c_campo_texto" required>
                <input type="submit" value="Enviar">
            </form> -->
            <input type="text" name="texto_campo" id="campo_texto" pattern="[0-9]{3}-[A-Za-z]{3}.([0-9])/[0-9]">
            <p id="mensagem"></p>
            <button class="btn btn-primary" id="b_validar">Validar</button>
            <script>
                let texto_campo = document.getElementById("campo_texto");
                let texto_campo_valor = texto_campo.value;
                texto_campo_valor = texto_campo_valor.replace(/[\.\-\(\)\/]/, "");
                let b_validar = document.getElementById("b_validar");
                let mensagem = document.getElementById("mensagem");
                b_validar.addEventListener("click", (event) => {
                    event.preventDefault();
                    if (texto_campo_valor.length <= 0) {
                        // mensagem.value = "Campo vazio";
                        mensagem.textContent = "Campo vazio";
                    } else {
                        // mensagem.value = texto_campo_valor;
                        mensagem.textContent = texto_campo_valor;
                    }
                });
            </script>
        </div>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>