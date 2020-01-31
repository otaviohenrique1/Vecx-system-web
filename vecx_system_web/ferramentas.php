<?php 
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "ferramentas";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
    
    // if ($_SESSION["usuario_cargo"] != "Administrador") {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: menu.php");
    //     die();
    // } else {      
?>
        <h1>Ferramentas de sistema</h1>
<?php 
    // }
    require_once("rodape.php");
?>