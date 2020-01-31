<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Funcionario.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "ficha-funcionario";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $funcionarioDao = new FuncionarioDao($conexao);
    $funcionario = $funcionarioDao->buscaFuncionario($id);
?>
<h1>Ficha do funcionario</h1>
<div class="col-md-12 form-group">
    <label>Nome</label>
    <label><?= $funcionario->getNome(); ?></label>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>RG</label>
        <label><?= $funcionario->getRg(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>CPF</label>
        <label><?= $funcionario->getCpf(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Sexo</label>
        <label><?= $funcionario->getSexo(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Data de nascimento</label>
        <label><?= $funcionario->getDataCadastro(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Email</label>
        <label><?= $funcionario->getEmail(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-9 form-group">
        <label>Endereço</label>
        <label><?= $funcionario->getEndereco(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Numero</label>
        <label><?= $funcionario->getNumero(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Estado</label>
        <label><?= $funcionario->getEstado(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Cidade</label>
        <label><?= $funcionario->getCidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Bairro</label>
        <label><?= $funcionario->getBairro(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Complemento</label>
        <label><?= $funcionario->getComplemento(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>CEP</label>
        <label><?= $funcionario->getCep(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Telefone</label>
        <label><?= $funcionario->getTelefone(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Celular</label>
        <label><?= $funcionario->getCelular(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Cargo</label>
        <label><?= $funcionario->getCargo(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Login</label>
        <label><?= $funcionario->getLogin(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Senha</label>
        <label><?= $funcionario->getSenha(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Carteira de trabalho</label>
        <label><?= $funcionario->getCarteiraTrabalho(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Salario</label>
        <label><?= $funcionario->getSalario(); ?></label>
    </div>
</div>
<br>
<div class="col-md-12 form-group">
    <a href="formulario-altera-funcionario.php?id=<?= $funcionario->getId(); ?>" class="btn btn-primary">Alterar</a>
</div>
<?php require_once("rodape.php"); ?>