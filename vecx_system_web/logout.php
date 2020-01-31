<?php
    require_once("class/Mensagem.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::logout();
    // Mensagem::mostraAlerta("success", "success", "Deslogado com sucesso.");
    $_SESSION['mensagem_deslogado'] = "Usuário deslogado com sucesso.";
    header("Location: index.php");
    die();
