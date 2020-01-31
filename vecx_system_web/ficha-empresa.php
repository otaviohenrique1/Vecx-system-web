<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Empresa.php");
    require_once("class/EmpresaDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "ficha-empresa";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $empresaDao = new EmpresaDao($conexao);
    $empresa = $empresaDao->buscaEmpresa($id);
?>
<h1>Ficha da empresa</h1>
<div class="col-md-12 form-group">
    <label>Nome</label>
    <label><?= $empresa->getNome(); ?></label>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>CNPJ</label>
        <label><?= $empresa->getCnpj(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Razão Social</label>
        <label><?= $empresa->getRazaoSocial(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-check">
        <label>Inscrição Estadual</label>
        <label><?= $empresa->getInscricaoEstadual(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Inscrição Numero</label>
        <label><?= $empresa->getInscricaoNumero(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label for="c_email">Email</label>
        <label><?= $empresa->getEmail(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-9 form-group">
        <label for="c_endereco">Endereço</label>
        <label><?= $empresa->getEndereco(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label for="c_numero">Numero</label>
        <label><?= $empresa->getNumero(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Estado</label>
        <label><?= $empresa->getEstado(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Cidade</label>
        <label><?= $empresa->getCidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Bairro</label>
        <label><?= $empresa->getBairro(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Complemento</label>
        <label><?= $empresa->getComplemento(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>CEP</label>
        <label><?= $empresa->getCep(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Telefone</label>
        <label><?= $empresa->getTelefone(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Tipo de empresa</label>
        <label><?= $empresa->getTipoEmpresa(); ?></label>
    </div>
</div>
<br>
<div class="col-md-12 form-group">
    <a href="formulario-altera-empresa.php?id=<?= $empresa->getId(); ?>" class="btn btn-primary">Alterar</a>
</div>
<?php require_once("rodape.php"); ?>