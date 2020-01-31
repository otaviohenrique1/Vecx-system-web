<?php
    require_once("verifica_sessao.php");

    class Mensagem {
        public static function colocaMensagemDeSessaoNaTela($nomeSessao, $tipoMensagem) {
            if (!empty($_SESSION[$nomeSessao])) {
                Mensagem::exibeMensagem($tipoMensagem, $_SESSION[$nomeSessao]);
                unset($_SESSION[$nomeSessao]);
            }
        }

        public static function colocaDadoDeSessaoEmCampo($nomeSessao) {
            if (!empty($_SESSION[$nomeSessao])) {
                echo "value='" . $_SESSION[$nomeSessao] . "'";
                unset($_SESSION[$nomeSessao]);
            }
        }

        // public static function mostraAlerta($nome, $tipo, $mensagem) {
        //     if (isset($_SESSION[$nome])) {
        //         $_SESSION[$nome] = $mensagem;
        //         echo "<p class='alert alert-$tipo'>". $_SESSION[$nome] ."</p>";
        //         unset($_SESSION[$nome]); // Remove variavel de sessao
        //     }
        // }

        public static function exibeMensagem($tipo, $mensagem) {
            echo "<p class='alert alert-$tipo'>$mensagem</p>";
        }
    }
