<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Cliente.php");
    require_once("class/ClienteDao.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "remove-cliente";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Gerente") or ($_SESSION["usuario_cargo"] != "Administrador")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: lista-cliente.php");
    //     die();
    // } else {
        try {
            $id = $_POST['id'];
            $conexao = Conecta::criaConexao();
            $clienteDao = new ClienteDao($conexao);
            $clienteDao->removeFuncionario($id);
            // Mensagem::exibeMensagem("success", "Cliente removido com sucesso");
            $_SESSION["mensagem_removido"] = "Cliente removido com sucesso";
            header("Location: lista-cliente.php"); // Redirecionamento para a pagina lista-cliente
            die(); //Para a execucao do codigo
        } catch (Exception $msg) {
            $_SESSION["mensagem_erro_removido"] = "Cliente não foi removido. Erro: " . $msg;
            // Mensagem::exibeMensagem("danger", "Cliente não foi removido");
            // Mensagem::exibeMensagem("danger", $msg);
        }
    // }

    require_once("rodape.php");
