<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Funcionario.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "remove-funcionario";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Gerente") or ($_SESSION["usuario_cargo"] != "Administrador")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: lista-funcionario.php");
    //     die();
    // } else {
        try {
            $id = $_POST['id'];
            $conexao = Conecta::criaConexao();
            $funcionarioDao = new FuncionarioDao($conexao);
            $funcionarioDao->removeFuncionario($id);
            // Mensagem::exibeMensagem("success", "Funcionario removido com sucesso");
            $_SESSION["mensagem_removido"] = "Funcionario removido com sucesso";
            header("Location: lista-funcionario.php"); // Redirecionamento para a pagina lista-funcionario
            die(); //Para a execucao do codigo
        } catch (Exception $msg) {
            $_SESSION["mensagem_erro_removido"] = "Funcionario não foi removido. Erro: " . $msg;
            // Mensagem::exibeMensagem("danger", "Funcionario não foi removido");
            // Mensagem::exibeMensagem("danger", $msg);
        }
    // }

    require_once("rodape.php");
