<?php 
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Mensagem.php");
    require_once("class/Listas.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "formulario-cliente";
    // ValidaAcessoPagina::ValidaAcessoPaginaAdministrador($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaGerente($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaAtendente($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaEstoque($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaCarregador($_SESSION["usuario_cargo"], $paginaVariavel);
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<form action="adiciona-cliente.php" method="post">
    <div class="col-md-12 form-group">
        <label for="c_nome">Nome</label>
        <input type="text" name="nome" id="c_nome" class="form-control">
        <?php Mensagem::colocaMensagemDeSessaoNaTela('nome_vazio', "danger"); ?>
    </div>
    <div class="col-md-12">
        <div class="col-md-6 form-group">
            <label for="c_rg">RG</label>
            <input type="number" name="rg" id="c_rg" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('rg_vazio', "danger"); ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_cpf">CPF</label>
            <input type="number" name="cpf" id="c_cpf" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('rg_vazio', "danger"); ?>
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-group">
            <div class="col-md-6 form-check">
                <input type="radio" name="sexo" id="c_feminino" value="Feminino" class="form-control">
                <label for="c_feminino">Feminino</label>
            </div>
            <div class="col-md-6 form-check">
                <input type="radio" name="sexo" id="c_masculino" value="Masculino" class="form-control">
                <label for="c_masculino">Masculino</label>
            </div>
            <?php Mensagem::colocaMensagemDeSessaoNaTela('sexo_vazio', "danger"); ?>
        </div>
        <div class="col-md-4 form-group">
            <label for="c_data_nascimento">Data de nascimento</label>
            <input type="date" name="data_nascimento" id="c_data_nascimento" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_email">Email</label>
            <input type="text" name="email" id="c_email" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-9 form-group">
            <label for="c_endereco">Endereço</label>
            <input type="text" name="endereco" id="c_endereco" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_numero">Numero</label>
            <input type="number" name="numero" id="c_numero" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_estado">Estado</label>
            <?php $estado = Listas::listaEstadosBrasil(); ?>
            <select name="estado" id="c_estado" class="form-control">
                <?php foreach($estado as $k => $c) : ?>
                    <option value="<?= $k; ?>"><?= $c; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_cidade">Cidade</label>
            <input type="text" name="cidade" id="c_cidade" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_bairro">Bairro</label>
            <input type="text" name="bairro" id="c_bairro" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_complemento">Complemento</label>
            <input type="text" name="complemento" id="c_complemento" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_cep">CEP</label>
            <input type="number" name="cep" id="c_cep" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_telefone">Telefone</label>
            <input type="number" name="telefone" id="c_telefone" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('telefone_vazio', "danger"); ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_celular">Celular</label>
            <input type="number" name="celular" id="c_celular" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('celular_vazio', "danger"); ?>
        </div>
    </div>
    <br>
    <div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary" id="b_salvar">Cadastrar</button>
    </div>
</form>
<?php require_once("rodape.php"); ?>