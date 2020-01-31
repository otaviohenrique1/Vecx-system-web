<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Teste index</title>
    </head>
    <body>
        <div class="container">
            <?php
                function exibeMensagem($tipo, $mensagem) {
                    echo "<p class='alert alert-$tipo'>$mensagem</p>";
                }
                echo exibeMensagem("success", "Cadastrado com sucesso");
            ?>
        </div>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
