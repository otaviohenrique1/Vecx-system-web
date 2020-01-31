<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Produto.php");
    require_once("class/ProdutoDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "altera-estoque";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Gerente") or ($_SESSION["usuario_cargo"] != "Administrador") or ($_SESSION["usuario_cargo"] != "Estoque")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: lista-produto.php");
    //     die();
    // } else {
        $id = $_POST["e_id"];
        $quantidade = isset($_POST["e_quantidade"]) ? $_POST["e_quantidade"] : 0;
        $valor = isset($_POST["valor"]) ? $_POST["valor"] : 0;

        $conexao = Conecta::criaConexao();
        $produtoDao = new ProdutoDao($conexao);
        if ($produtoDao->atualizaEstoque($id, $quantidade, $valor)) {
            echo "<p class='alert alert-success'>Dados do estoque foram alterados com sucesso!</p>";
            echo "<a href='lista-produto.php' class='btn btn-primary'>Voltar</a>";
        } else {
            $msg = mysqli_error($conexao);
            echo "<p class='alert alert-danger'>Dados do estoque não foram alterados! Erro: " . $msg . "</p>";
            echo "<a href='lista-produto.php' class='btn btn-primary'>Voltar</a>";
        }
    // }
    require_once("rodape.php");
