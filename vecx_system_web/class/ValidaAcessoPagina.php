<?php
    require_once("class/Funcionario_cargo_acesso.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    
    class ValidaAcessoPagina {
        public static function ValidaAcesso($cargo, $paginaVariavel) {
            if ($cargo == "Administrador") {
                $administradorAcessoPaginas = Funcionario_cargo_acesso::AdministradorAcessoPaginas();
                ValidaAcessoPagina::ValidaAcessoCargo($paginaVariavel, $administradorAcessoPaginas);
            } else if ($cargo == "Gerente") {
                $gerenteAcessoPaginas = Funcionario_cargo_acesso::GerenteAcessoPaginas();
                ValidaAcessoPagina::ValidaAcessoCargo($paginaVariavel, $gerenteAcessoPaginas);
            } else if ($cargo == "Atendente") {
                $atendenteAcessoPaginas = Funcionario_cargo_acesso::AtendenteAcessoPaginas();
                ValidaAcessoPagina::ValidaAcessoCargo($paginaVariavel, $atendenteAcessoPaginas);
            } else if ($cargo == "Estoque") {
                $estoqueAcessoPaginas = Funcionario_cargo_acesso::EstoqueAcessoPaginas();
                ValidaAcessoPagina::ValidaAcessoCargo($paginaVariavel, $estoqueAcessoPaginas);
            } else if ($cargo == "Carregador") {
                $carregadorAcessoPaginas = Funcionario_cargo_acesso::CarregadorAcessoPaginas();
                ValidaAcessoPagina::ValidaAcessoCargo($paginaVariavel, $carregadorAcessoPaginas);
            }
        }

        public static function ValidaAcessoCargo($paginaVariavel, $arrayAcessoPaginas) {
            if (!in_array($paginaVariavel, $arrayAcessoPaginas)) {
                $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                die();
            }
        }

        public static function ValidaAcessoPaginaAdministrador($cargo, $paginaVariavel) {
            $administradorAcessoPaginas = Funcionario_cargo_acesso::AdministradorAcessoPaginas();
            if ($cargo === "Administrador") {
                if (in_array($paginaVariavel, $administradorAcessoPaginas)) {
                    $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                    Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                    echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                    die();
                }
            }
        }

        public static function ValidaAcessoPaginaGerente($cargo, $paginaVariavel) {
            $gerenteAcessoPaginas = Funcionario_cargo_acesso::GerenteAcessoPaginas();
            if ($cargo === "Gerente") {
                if (in_array($paginaVariavel, $gerenteAcessoPaginas)) {
                    $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                    Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                    echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                    die();
                }
            }
        }

        public static function ValidaAcessoPaginaAtendente($cargo, $paginaVariavel) {
            $atendenteAcessoPaginas = Funcionario_cargo_acesso::AtendenteAcessoPaginas();
            if ($cargo === "Atendente") {
                if (in_array($paginaVariavel, $atendenteAcessoPaginas)) {
                    $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                    Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                    echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                    die();
                }
            }
        }

        public static function ValidaAcessoPaginaEstoque($cargo, $paginaVariavel) {
            $estoqueAcessoPaginas = Funcionario_cargo_acesso::EstoqueAcessoPaginas();
            if ($cargo === "Estoque") {
                if (in_array($paginaVariavel, $estoqueAcessoPaginas)) {
                    $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                    Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                    echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                    die();
                }
            }
        }

        public static function ValidaAcessoPaginaCarregador($cargo, $paginaVariavel) {
            $carregadorAcessoPaginas = Funcionario_cargo_acesso::CarregadorAcessoPaginas();
            if ($cargo === "Carregador") {
                if (in_array($paginaVariavel, $carregadorAcessoPaginas)) {
                    $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
                    Mensagem::exibeMensagem("danger", $_SESSION["mensagem_acesso_invalido"]);
                    echo "<a href='menu.php' class='btn btn-primary'>Voltar</a>";
                    die();
                }
            }
        }
    }
