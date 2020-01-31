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
            <?php
                require_once("../class/Mensagem.php");
                require_once("../class/ValidaCampos.php");
                session_start();
                echo Mensagem::mostraAlerta("danger", "danger", "Campo esta vazio");
                Mensagem::exibeMensagem("danger", "Campo esta vazio");
            ?>
            <form action="#" method="post">
                <input type="text" name="campo_texto" id="campo_texto">
                <?php
                    if (!empty($_SESSION["campo_texto_vazio"])) {
                        echo $_SESSION["campo_texto_vazio"];
                        unset($_SESSION["campo_texto_vazio"]);
                    }
                ?>
                <input type="submit" value="Enviar">
            </form>
            <?php
                $texto = $_POST['campo_texto'];
                ValidaCampos::validaCampo($texto, "campo_texto", "testa_validacao_campos.php");
            ?>
            <p><?= $texto ?></p>
        </div>
        <script src="../js/validacao_campos.js"></script>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>