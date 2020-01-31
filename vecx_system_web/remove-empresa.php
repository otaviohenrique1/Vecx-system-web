<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Empresa.php");
    require_once("class/EmpresaDao.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "remove-empresa";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Gerente") or ($_SESSION["usuario_cargo"] != "Administrador")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: lista-empresa.php");
    //     die();
    // } else {
        try {
            $id = $_POST['id'];
            $conexao = Conecta::criaConexao();
            $empresaDao = new EmpresaDao($conexao);
            $empresaDao->removeEmpresa($id);
            // Mensagem::exibeMensagem("success", "Empresa removido com sucesso");
            $_SESSION["mensagem_removido"] = "Empresa removida com sucesso";
            header("Location: lista-empresa.php"); // Redirecionamento para a pagina lista-empresa
            die(); //Para a execucao do codigo
        } catch (Exception $msg) {
            $_SESSION["mensagem_erro_removido"] = "Empresa não foi removida. Erro: " . $msg;
            // Mensagem::exibeMensagem("danger", "Empresa não foi removido");
            // Mensagem::exibeMensagem("danger", $msg);
        }
    // }

    require_once("rodape.php");
