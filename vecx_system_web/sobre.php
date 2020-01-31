<?php 
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/verifica_sessao.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
?>
<h1>Sobre o Vecx System</h1>
<?php require_once("rodape.php"); ?>