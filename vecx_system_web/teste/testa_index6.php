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
            <div class="col-md-12">
                <h1>Teste pagina</h1>
            </div>
            <div class="col-md-12">
                <?php
                    require_once("../class/Mensagem.php");
                    require_once("../class/verifica_sessao.php");
                    require_once("../class/Funcionario_cargo_acesso.php");

                    $administradorAcessoPaginas = Funcionario_cargo_acesso::AdministradorAcessoPaginas();
                    $paginaVariavel = "produto-lista";
                    $paginaVariavel2 = "produto-2";

                    echo "<br>";

                    if (in_array($paginaVariavel, $administradorAcessoPaginas)) {
                        $_SESSION["teste1"] = "Teste 1";
                        Mensagem::exibeMensagem("success", $_SESSION["teste1"]);
                    } else {
                        $_SESSION["teste1"] = "Teste 1";
                        Mensagem::exibeMensagem("danger", $_SESSION["teste1"]);
                    }

                    if (in_array($paginaVariavel2, $administradorAcessoPaginas)) {
                        $_SESSION["teste2"] = "Teste 2";
                        Mensagem::exibeMensagem("success", $_SESSION["teste2"]);
                    } else {
                        $_SESSION["teste2"] = "Teste 2";
                        Mensagem::exibeMensagem("danger", $_SESSION["teste2"]);
                    }

                    echo "<br>";

                    echo ValidaAcessoPagina3::ValidaAcesso3("Administrador", "ferramentas");
                    echo ValidaAcessoPagina3::ValidaAcesso3("Gerente", "ferramentas");
                    echo ValidaAcessoPagina3::ValidaAcesso3("Atendente", "ferramentas");
                    echo ValidaAcessoPagina3::ValidaAcesso3("Estoque", "ferramentas");
                    echo ValidaAcessoPagina3::ValidaAcesso3("Carregador", "ferramentas");

                    class ValidaAcessoPagina3 {
                        public static function ValidaAcesso3($cargo, $paginaVariavel) {
                            if ($cargo == "Administrador") {
                                $administradorAcessoPaginas = Funcionario_cargo_acesso::AdministradorAcessoPaginas();
                                ValidaAcessoPagina3::ValidaAcessoCargo3($paginaVariavel, $administradorAcessoPaginas, $cargo);
                            } else if ($cargo == "Gerente") {
                                $gerenteAcessoPaginas = Funcionario_cargo_acesso::GerenteAcessoPaginas();
                                ValidaAcessoPagina3::ValidaAcessoCargo3($paginaVariavel, $gerenteAcessoPaginas, $cargo);
                            } else if ($cargo == "Atendente") {
                                $atendenteAcessoPaginas = Funcionario_cargo_acesso::AtendenteAcessoPaginas();
                                ValidaAcessoPagina3::ValidaAcessoCargo3($paginaVariavel, $atendenteAcessoPaginas, $cargo);
                            } else if ($cargo == "Estoque") {
                                $estoqueAcessoPaginas = Funcionario_cargo_acesso::EstoqueAcessoPaginas();
                                ValidaAcessoPagina3::ValidaAcessoCargo3($paginaVariavel, $estoqueAcessoPaginas, $cargo);
                            } else if ($cargo == "Carregador") {
                                $carregadorAcessoPaginas = Funcionario_cargo_acesso::CarregadorAcessoPaginas();
                                ValidaAcessoPagina3::ValidaAcessoCargo3($paginaVariavel, $carregadorAcessoPaginas, $cargo);
                            }
                        }
                        
                        public static function ValidaAcessoCargo3($paginaVariavel, $arrayAcessoPaginas, $cargo) {
                            if (!in_array($paginaVariavel, $arrayAcessoPaginas)) {
                                $_SESSION["mensagem"] = $cargo . ": Não existe no array";
                                Mensagem::exibeMensagem("danger", $_SESSION["mensagem"]);
                            } else {
                                $_SESSION["mensagem"] = $cargo . ": Existe no array";
                                Mensagem::exibeMensagem("success", $_SESSION["mensagem"]);
                            }
                        }
                    }

                    // Link de teste da pagina -> localhost/vecx_system_web/teste/testa_index6.php
                ?>
            </div>
        </div>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
