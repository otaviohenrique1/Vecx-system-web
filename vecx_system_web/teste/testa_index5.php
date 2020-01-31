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
                require_once("../class/Mensagem.php");
                require_once("../class/ValidaCampos.php");
                // session_start();
                require_once("../class/verifica_sessao.php");
                echo Mensagem::mostraAlerta("danger", "danger", "Campo esta vazio");
            ?>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="a_campo_texto">Campo texto 1</label>
                    <input type="text" name="campo_texto" id="a_campo_texto" class="form-control"
                        <?php
                            // if (!empty($_SESSION["campo_texto_valor"])) {
                            //     echo "value='" . $_SESSION["campo_texto_valor"] . "'";
                            //     unset($_SESSION["campo_texto_valor"]);
                            // }
                        ?>
                    >
                    <?php
                        if (!empty($_SESSION["campo_texto_vazio"])) {
                            echo "<p class='alert alert-danger'>" . $_SESSION["campo_texto_vazio"] . "</p>";
                            unset($_SESSION["campo_texto_vazio"]);
                        }
                        if (!empty($_SESSION["campo_texto_valor"])) {
                            echo "<p class='alert alert-success'>" . $_SESSION["campo_texto_valor"] . "</p>";
                            Mensagem::exibeMensagem("success", $_SESSION["campo_texto_valor"]);
                            unset($_SESSION["campo_texto_valor"]);
                        }
                        // if (!empty($_SESSION["campo_texto1_vazio"])) {
                        //     Mensagem::exibeMensagem("success", $_SESSION["campo_texto1_valor"]);
                        //     unset($_SESSION["campo_texto1_vazio"]);
                        // }
                    ?>
                </div>
                <div class="form-group">
                    <label for="a_campo_texto_2">Campo texto 2</label>
                    <input type="text" name="campo_texto_2" id="a_campo_texto_2" class="form-control"
                        <?php
                            // colocaDadoDeSessaoEmCampo1('campo_texto_2_valor');
                            Mensagem2::colocaDadoDeSessaoEmCampo2('campo_texto_2_valor');
                        ?>
                    >
                    <?php
                        // colocaMensagemDeSessaoNaTela1('campo_texto_2_vazio', 'danger');
                        Mensagem2::colocaMensagemDeSessaoNaTela2('campo_texto_2_vazio', 'danger');
                    ?>
                </div>
                <input type="submit" value="Enviar">
            </form>
            <?php
                class ValidacaoDadosCampos {
                    public static function validadorDeCampos2($campo, $nomeSessao, $mensagemSessao, $url) {
                        if (empty($campo)) {
                            $_SESSION[$nomeSessao] = $mensagemSessao;
                            echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'";
                            // header('Location:' . $url);
                        }
                    }
    
                    public static function retornaDadoDeSessaoParaCampo2($nomeSessao, $dado) {
                        $_SESSION[$nomeSessao] = $dado;
                        return $_SESSION[$nomeSessao];
                    }
                }

                class Mensagem2 {
                    public static function colocaMensagemDeSessaoNaTela2($nomeSessao, $tipoMensagem) {
                        if (!empty($_SESSION[$nomeSessao])) {
                            Mensagem::exibeMensagem($tipoMensagem, $_SESSION[$nomeSessao]);
                            unset($_SESSION[$nomeSessao]);
                        }
                    }
    
                    public static function colocaDadoDeSessaoEmCampo2($nomeSessao) {
                        if (!empty($_SESSION[$nomeSessao])) {
                            echo "value='" . $_SESSION[$nomeSessao] . "'";
                            unset($_SESSION[$nomeSessao]);
                        }
                    }
                }
                
                function validadorDeCampos1($campo, $nomeSessao, $mensagemSessao, $url) {
                    if (empty($campo)) {
                        $_SESSION[$nomeSessao] = $mensagemSessao;
                        echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'";
                        // header('Location:' . $url);
                    }
                }

                function retornaDadoDeSessaoParaCampo1($nomeSessao, $dado) {
                    $_SESSION[$nomeSessao] = $dado;
                    return $_SESSION[$nomeSessao];
                }

                function colocaMensagemDeSessaoNaTela1($nomeSessao, $tipoMensagem) {
                    if (!empty($_SESSION[$nomeSessao])) {
                        Mensagem::exibeMensagem($tipoMensagem, $_SESSION[$nomeSessao]);
                        unset($_SESSION[$nomeSessao]);
                    }
                }

                function colocaDadoDeSessaoEmCampo1($nomeSessao) {
                    if (!empty($_SESSION[$nomeSessao])) {
                        echo "value='" . $_SESSION[$nomeSessao] . "'";
                        unset($_SESSION[$nomeSessao]);
                    }
                }
            ?>
            <?php
                $texto = isset($_POST['campo_texto']) ? $_POST['campo_texto']: "";
                // ValidaCampos::validaCampo($texto, "campo_texto", "testa_index5.php");
                if (empty($texto)) {
                    $_SESSION['campo_texto_vazio'] = "Campo texto esta vazio";
                    $url = "http://localhost/vecx_system_web/teste/testa_index5.php";
                    echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'";
                } else {
                    $_SESSION['campo_texto_valor'] = $texto;
                }
                // ValidaCampos::validaCampo2($texto, "campo_texto1", "http://localhost/vecx_system_web/teste/testa_index5.php");
                // localhost/vecx_system_web/teste/testa_index5.php

                $texto2 = isset($_POST['campo_texto_2']) ? $_POST['campo_texto_2'] : "";
                $mensagemSessaoTexto = "Campo texto 2 esta vazio";
                $urlTexto = "http://localhost/vecx_system_web/teste/testa_index5.php";
                $nomeSessaoVazio = 'campo_texto_2_vazio';
                $nomeSessaoValor = 'campo_texto_2_valor';
                // validadorDeCampos1($texto2, $nomeSessaoVazio, $mensagemSessaoTexto, $urlTexto);
                ValidacaoDadosCampos::validadorDeCampos2($texto2, $nomeSessaoVazio, $mensagemSessaoTexto, $urlTexto);
                // retornaDadoDeSessaoParaCampo1($nomeSessaoValor, $texto2);
                ValidacaoDadosCampos::retornaDadoDeSessaoParaCampo2($nomeSessaoValor, $texto2);
            ?>
        </div>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
