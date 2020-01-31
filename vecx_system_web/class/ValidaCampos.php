<?php
    require_once("Mensagem.php");
    require_once("verifica_sessao.php");
    
    class ValidaCampos {
        public static function validaCampoInput($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo)) {
                $_SESSION[$nomeSessao] = "Campo " . $nomeCampo . " esta vazio";
                header("Location: " . $url);
            }
        }

        public static function validaCampoSelect($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo) or $campo == "Selecione" or $campo == "selecione") {
                $_SESSION[$nomeSessao] = "Selecione um valor valido no campo " . $nomeCampo;
                header("Location: " . $url);
            }
        }
        
        public static function validaCampoRadio($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo) or $campo === false) {
                $_SESSION[$nomeSessao] = "Selecione um " . $nomeCampo;
                header("Location: " . $url);
            }
        }

        public static function validaCampoInput2($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo)) {
                $_SESSION[$nomeSessao] = "Campo " . $nomeCampo . " esta vazio";
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }

        public static function validaCampoSelect2($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo) or $campo == "Selecione" or $campo == "selecione") {
                $_SESSION[$nomeSessao] = "Selecione um valor valido no campo " . $nomeCampo;
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }
        
        public static function validaCampoRadio2($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo) or $campo === false) {
                $_SESSION[$nomeSessao] = "Selecione um " . $nomeCampo;
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }

        public static function retornaDadoDeSessaoParaCampo($nomeSessao, $dado) {
            $_SESSION[$nomeSessao] = $dado;
            return $_SESSION[$nomeSessao];
        }

        public static function validaCampo1($campo, $nomeCampo, $url) {
            if (empty($campo)) {
                Mensagem::mostraAlerta($nomeCampo . "_vazio", "danger", "Campo " . $nomeCampo . " esta vazio");
                header("Location:" . $url);
            }
        }

        public static function validaCampo2($campo, $nomeCampo, $url) {
            if (empty($campo)) {
                $_SESSION[$nomeCampo . "1_vazio"] = "Campo " . $nomeCampo . " esta vazio";
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }

        public static function validaCampo3($campo, $nomeCampo, $url) {
            if (empty($campo)) {
                Mensagem::mostraAlerta($nomeCampo . "_vazio", "danger", "Campo " . $nomeCampo . " esta vazio");
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }

        public static function validaCampo4($campo, $nomeSessao, $nomeCampo, $url) {
            if (empty($campo)) {
                $_SESSION[$nomeSessao] = "Campo " . $nomeCampo . " esta vazio";
                echo "META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'"; // Volta para a pagina de cadastro
            }
        }
    }
