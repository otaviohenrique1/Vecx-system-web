<?php
    require_once("cabecalho.php");
    require_once("class/verifica_sessao.php");
    require_once("class/Mensagem.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
?>
<div class="col-md-12">
    <?php require_once("area_usuario_menu_nav_bar.php"); ?>
</div>
<div class="col-md-12">
    <?php
        Mensagem::colocaMensagemDeSessaoNaTela('mensagem_login_valido', "success");
        Mensagem::colocaMensagemDeSessaoNaTela('mensagem_acesso_invalido', "danger");
    ?>
</div>
<div class="col-md-12 row">
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina da lista de produtos">
        <div class="card-body">
            <a href="lista-produto.php" class="btn btn-primary">Lista de produtos</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina do cadastro de clientes">
        <div class="card-body">
            <a href="formulario-cliente.php" class="btn btn-primary">Cadastro de clientes</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina da lista de clientes">
        <div class="card-body">
            <a href="lista-cliente.php" class="btn btn-primary">Lista de clientes</a>
        </div>
    </div>
</div>
<div class="col-md-12 row">
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina do cadastro de produtos">
        <div class="card-body">
            <a href="formulario-produto.php" class="btn btn-primary">Cadastro de produtos</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina do cadastro de empresas">
        <div class="card-body">
            <a href="formulario-empresa.php" class="btn btn-primary">Cadastro de empresas</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina da lista de empresas">
        <div class="card-body">
            <a href="lista-empresa.php" class="btn btn-primary">Lista de empresas</a>
        </div>
    </div>
</div>
<div class="col-md-12 row">
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina do cadastro de funcionarios">
        <div class="card-body">
            <a href="formulario-funcionario.php" class="btn btn-primary">Cadastro de funcionarios</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina da lista de funcionarios">
        <div class="card-body">
            <a href="lista-funcionario.php" class="btn btn-primary">Lista de funcionarios</a>
        </div>
    </div>
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina de ferramentas de sistema">
        <div class="card-body">
            <a href="ferramentas.php" class="btn btn-primary">Ferramentas</a>
        </div>
    </div>
</div>
<div class="col-md-12 row">
    <div class="card col-md-4" style="width: 18rem;">
        <img src="" alt="Pagina do sobre o Vecx System">
        <div class="card-body">
            <a href="sobre.php" class="btn btn-primary">Sobre</a>
        </div>
    </div>
</div>
<?php require_once("rodape.php"); ?>