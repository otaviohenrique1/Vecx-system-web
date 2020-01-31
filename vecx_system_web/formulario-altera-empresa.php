<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Listas.php");
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/Empresa.php");
    require_once("class/EmpresaDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    
    $paginaVariavel = "formulario-altera-empresa";
    // ValidaAcessoPagina::ValidaAcessoPaginaAdministrador($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaGerente($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaAtendente($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaEstoque($_SESSION["usuario_cargo"], $paginaVariavel);
    // ValidaAcessoPagina::ValidaAcessoPaginaCarregador($_SESSION["usuario_cargo"], $paginaVariavel);
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $empresaDao = new EmpresaDao($conexao);
    $empresa = $empresaDao->buscaEmpresa($id);
    $inscricao_estadual_selecao = $empresa->getInscricaoEstadual() ? "checked='checked'" : "" ;
    // $empresa->setInscricaoEstadual($inscricao_estadual_selecao);
    // session_start();
?>
<form action="altera-empresa.php" method="post">
    <input type="hidden" name="id" id="id" value="<?= $empresa->getId(); ?>">
    <div class="col-md-12 form-group">
        <label for="c_nome">Nome</label>
        <input type="text" name="nome" id="c_nome" class="form-control" value="<?= $empresa->getNome(); ?>">
        <?php Mensagem::colocaMensagemDeSessaoNaTela('nome_vazio', "danger"); ?>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_cnpj">CNPJ</label>
            <input type="number" name="cnpj" id="c_cnpj" class="form-control" value="<?= $empresa->getCnpj(); ?>">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('cnpj_vazio', "danger"); ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_razao_social">Razão Social</label>
            <input type="text" name="razao_social" id="c_razao_social" class="form-control" value="<?= $empresa->getRazaoSocial(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-check">
            <label for="c_inscricao_estadual">Inscrição Estadual</label>
            <input type="checkbox" name="inscricao_estadual" id="c_inscricao_estadual" class="form-control" value="<?= $inscricao_estadual_selecao; ?>">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_inscricao_numero">Inscrição Numero</label>
            <input type="number" name="inscricao_numero" id="c_inscricao_numero" class="form-control" value="<?= $empresa->getInscricaoNumero(); ?>">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_email">Email</label>
            <input type="text" name="email" id="c_email" class="form-control" value="<?= $empresa->getEmail(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-9 form-group">
            <label for="c_endereco">Endereço</label>
            <input type="text" name="endereco" id="c_endereco" class="form-control" value="<?= $empresa->getEndereco(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_numero">Numero</label>
            <input type="number" name="numero" id="c_numero" class="form-control" value="<?= $empresa->getNumero(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_estado">Estado</label>
            <?php $estado = Listas::listaEstadosBrasil(); ?>
            <select name="estado" id="c_estado" class="form-control">
                <?php
                    foreach($estado as $k => $c) :
                        $estadoSelecionado = ($funcionario->getEstado() == $k) ? "selected" : "" ;
                ?>
                    <option value="<?= $k; ?>" <?= $estadoSelecionado; ?>><?= $c; ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_cidade">Cidade</label>
            <input type="text" name="cidade" id="c_cidade" class="form-control" value="<?= $empresa->getEstado(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_bairro">Bairro</label>
            <input type="text" name="bairro" id="c_bairro" class="form-control" value="<?= $empresa->getBairro(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_complemento">Complemento</label>
            <input type="text" name="complemento" id="c_complemento" class="form-control" value="<?= $empresa->getComplemento(); ?>">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_cep">CEP</label>
            <input type="number" name="cep" id="c_cep" class="form-control" value="<?= $empresa->getCep(); ?>">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_telefone">Telefone</label>
            <input type="number" name="telefone" id="c_telefone" class="form-control" value="<?= $empresa->getTelefone(); ?>">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('telefone_vazio', "danger"); ?>
        </div>
        <div class="col-md-6 form-group">
            <label for="c_tipo_empresa">Tipo de empresa</label>
            <?php $tipoEmpresa = Listas::listaTipoEmpresa(); ?>
            <select name="tipo_empresa" id="c_tipo_empresa" class="form-control">
                <?php
                    foreach($tipoEmpresa as $k => $c) :
                        $tipoEmpresaSelecionado = ($funcionario->getTipoEmpresa() == $k) ? "selected" : "" ;
                ?>
                    <option value="<?= $k; ?>" <?= $tipoEmpresaSelecionado; ?>><?= $c; ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <br>
    <div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary" id="b_salvar">Cadastrar</button>
    </div>
</form>
<?php require_once("rodape.php"); ?>