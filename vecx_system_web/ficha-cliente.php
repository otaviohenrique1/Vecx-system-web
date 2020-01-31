<?php 
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Cliente.php");
    require_once("class/ClienteDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "ficha-cliente";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $clienteDao = new ClienteDao($conexao);
    $cliente = $clienteDao->buscaCliente($id);
?>
<h1>Ficha do cliente</h1>
<div class="col-md-12 form-group">
    <label>Nome</label>
    <label><?= $cliente->getNome(); ?></label>
</div>
<div class="col-md-12">
    <div class="col-md-6 form-group">
        <label>RG</label>
        <label><?= $cliente->getRg(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>CPF</label>
        <label><?= $cliente->getCpf(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Sexo</label>
        <label><?= $cliente->getSexo(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Data de nascimento</label>
        <label><?= $cliente->getDataCadastro(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Email</label>
        <label><?= $cliente->getEmail(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-9 form-group">
        <label>Endereço</label>
        <label><?= $cliente->getEndereco(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Numero</label>
        <label><?= $cliente->getNumero(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Estado</label>
        <label><?= $cliente->getEstado(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Cidade</label>
        <label><?= $cliente->getCidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Bairro</label>
        <label><?= $cliente->getBairro(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Complemento</label>
        <label><?= $cliente->getComplemento(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>CEP</label>
        <label><?= $cliente->getCep(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Telefone</label>
        <label><?= $cliente->getTelefone(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Celular</label>
        <label><?= $cliente->getCelular(); ?></label>
    </div>
</div>
<br>
<div class="col-md-12 form-group">
    <a href="formulario-altera-cliente.php?id=<?= $cliente->getId(); ?>" class="btn btn-primary">Alterar</a>
</div>
<?php require_once("rodape.php"); ?>