<?php
    class RotasSistema {
        public function AnalisaRequisicaoRota($cargo, $rota) {
            if ($cargo == "") {
                $_SESSION["mensagem_acesso_invalido"] = "Usuario sem acesso a esta pagina";
                return $_SESSION["mensagem_acesso_invalido"];
            }
            return "";
        }
    }
    /*
        sistema analisa requisição da rota e devolve mensagem, se o cargo do usuario tiver acesso a pagina ele consegue acessa-la (monta a rota), se o cargo do usuario nao tiver o acesso o sistema retorna uma mensagem de aviso na pagina do menu
    */
