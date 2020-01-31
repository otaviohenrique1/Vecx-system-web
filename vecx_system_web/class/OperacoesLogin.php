<?php
    require_once("verifica_sessao.php");
    // session_start();
    
    class OperacoesLogin {
        public static function usuarioEstaLogado() {
            return isset($_SESSION["usuario_logado"]);
        }
        
        public static function verificaUsuario() {
            if (!OperacoesLogin::usuarioEstaLogado()) {
                $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                header("Location: index.php");
                die();
            }
        }
        
        public static function usuarioLogado() {
            return $_SESSION["usuario_logado"];
        }

        public static function logaUsuario($usuario, $cargo) {
            $_SESSION["usuario_logado"] = $usuario;
            $_SESSION["usuario_cargo"] = $cargo;
        }

        public static function logout() {
            require_once("verifica_sessao.php");
            // session_start();
            session_destroy();
        }
    }    
