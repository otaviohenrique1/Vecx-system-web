<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Produto.php");
    require_once("class/ProdutoDao.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "remove-produto";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Gerente") or ($_SESSION["usuario_cargo"] != "Administrador")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: lista-produto.php");
    //     die();
    // } else {
        $id = $_POST['id'];
        $conexao = Conecta::criaConexao();
        $produtoDao = new ProdutoDao($conexao);
        // $produtoDao->removeProduto($id);
        if ($produtoDao->removeProduto($id)) {
            $_SESSION["mensagem_removido"] = "Produto removido com sucesso";
            // Mensagem::exibeMensagem("success", "Produto removido com sucesso");
            header("Location: lista-produto.php"); // Redirecionamento para a pagina lista-produto
            die(); //Para a execucao do codigo
        } else {
            $msg = mysqli_error($conexao);
            $_SESSION["mensagem_erro_removido"] = "Produto não foi removido. Erro: " . $msg;
            // Mensagem::exibeMensagem("danger", "Produto não foi removido");
            // Mensagem::exibeMensagem("danger", $msg);
        }
    // }

    require_once("rodape.php");
