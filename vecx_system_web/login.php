<?php
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/ValidaCampos.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/OperacoesLogin.php");
    require_once("class/verifica_sessao.php");

    // login: funcionario1
    // senha: funcionario1
    // cargo: Gerente
    // Link de teste pagina -> http://localhost/vecx_system_web/index.php

    $url = "http://localhost/vecx_system_web/index.php";

    $usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    ValidaCampos::validaCampoInput($usuario, 'usuario_vazio', "usuario", $url);

    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
    ValidaCampos::validaCampoInput($senha, 'senha_vazio', "senha", $url);

    $conexao = Conecta::criaConexao();
    $funcionarioDao = new FuncionarioDao($conexao);

    if (empty($usuario) or empty($senha)) {
        $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
        header("Location: index.php");
    } else {
        $funcionario = $funcionarioDao->buscaLoginFuncionario($usuario, $senha);
        if ($funcionario) {
            $_SESSION['mensagem_login_valido'] = "Usuário logado com sucesso.";
            $cargo = $funcionario->getCargo();
            OperacoesLogin::logaUsuario($usuario, $cargo);
            header("Location: menu.php");
        } else if (!$funcionario) {
            $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
            header("Location: index.php");
        }
    }
    die();

    // if (empty($usuario)) {
    //     $_SESSION['usuario_vazio'] = "Campo usuario esta vazio";
    //     $url = "http://localhost/vecx_system_web/index.php";
    //     echo "
    //         META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'
    //     ";
    // } else {
    //     $_SESSION['usuario_valor'] = $usuario;
    // }
    // if (empty($senha)) {
    //     $_SESSION['senha_vazio'] = "Campo senha esta vazio";
    //     $url = "http://localhost/vecx_system_web/index.php";
    //     echo "
    //         META HTTP-EQUIV-REFLASH CONTENT - '0:URL=$url'
    //     ";
    // } else {
    //     $_SESSION['senha_valor'] = "";
    // }
    // $conexao = Conecta::criaConexao();
    // $funcionarioDao = new FuncionarioDao($conexao);
    // $funcionario = $funcionarioDao->buscaLoginFuncionario($usuario, $senha);
    // if ($funcionario) {
    //     $cargo = $funcionario->getCargo();
    //     $_SESSION['mensagem_login_valido'] = "Usuário logado com sucesso.";
    //     OperacoesLogin::logaUsuario($usuario, $cargo);
    //     header("Location: menu.php");
    // } else {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // }
    // die();

    // if (empty($usuario) and empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    //     die();
    // } elseif (empty($usuario) or empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    //     die();
    // } else if ($funcionario) {
    //     $cargo = $funcionario->getCargo();
    //     $_SESSION['mensagem_login_valido'] = "Usuário logado com sucesso.";
    //     OperacoesLogin::logaUsuario($usuario, $cargo);
    //     header("Location: menu.php");
    // } else {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // }
    // die();

    // if (empty($usuario) or empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // } else if (empty($usuario) and empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // } else if ($funcionario) {
    //     $_SESSION['mensagem_login_valido'] = "Usuário logado com sucesso.";
    //     $cargo = $funcionario->getCargo();
    //     OperacoesLogin::logaUsuario($usuario, $cargo);
    //     header("Location: menu.php");
    // } else if (!$funcionario) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // }
    // die();

    // if (empty($usuario) or empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // } else if (empty($usuario) and empty($senha)) {
    //     $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //     header("Location: index.php");
    // } else {
    //     $funcionario = $funcionarioDao->buscaLoginFuncionario($usuario, $senha);
    //     if ($funcionario) {
    //         $_SESSION['mensagem_login_valido'] = "Usuário logado com sucesso.";
    //         $cargo = $funcionario->getCargo();
    //         OperacoesLogin::logaUsuario($usuario, $cargo);
    //         header("Location: menu.php");
    //     } else if (!$funcionario) {
    //         $_SESSION['mensagem_login_invalido'] = "Usuário ou senha invalidos.";
    //         header("Location: index.php");
    //     }
    // }
    // die();
