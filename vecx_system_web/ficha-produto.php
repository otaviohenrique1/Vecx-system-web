<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Produto.php");
    require_once("class/ProdutoDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "ficha-produto";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    $id = $_GET['id'];
    $conexao = Conecta::criaConexao();
    $produtoDao = new ProdutoDao($conexao);
    $produto = $produtoDao->buscaProduto($id);
?>
<div class="col-md-12 form-group">
    <label>Nome</label>
    <label><?= $produto->getNome(); ?></label>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Marca</label>
        <label><?= $produto->getMarca(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Quantidade</label>
        <label><?= $produto->getQuantidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Garantia</label>
        <label><?= $produto->getGarantia(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Fornecedor nome</label>
        <label><?= $produto->getFornecedorNome(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Tipo de produto</label>
        <label><?= $produto->getTipoProduto(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <label>Descricao</label>
    <label><?= $produto->getDescricao(); ?></label>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Lote</label>
        <label><?= $produto->getLote(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Peso</label>
        <label><?= $produto->getPeso(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Altura</label>
        <label><?= $produto->getAltura(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Comprimento</label>
        <label><?= $produto->getComprimento(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Largura</label>
        <label><?= $produto->getLargura(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Espessura</label>
        <label><?= $produto->getEspessura(); ?></label>
    </div>
    <div class="col-md-3 form-group">
        <label>Profundidade</label>
        <label><?= $produto->getProfundidade(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Cor</label>
        <label><?= $produto->getCor(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Montagem</label>
        <label><?= $produto->getMontagem(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Aplicacao</label>
        <label><?= $produto->getAplicacao(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Modelo</label>
        <label><?= $produto->getModelo(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Vida util</label>
        <label><?= $produto->getVidaUtil(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Codigo de barras</label>
        <label><?= $produto->getCodigoBarras(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-4 form-group">
        <label>Preço de compra</label>
        <label><?= $produto->getPrecoCompra(); ?></label>
    </div>
    <div class="col-md-4 form-group">
        <label>Preço a vista</label>
        <label><?= $produto->getPrecoaVista(); ?></label>
    </div>
    <div class="col-md-1 form-group">
        <label>Quantidade de componentes</label>
        <label><?= $produto->getQuantidadeComponentes(); ?></label>
    </div>
</div>
<div class="col-md-12 form-row">
    <div class="col-md-6 form-group">
        <label>Data da primeira compra</label>
        <label><?= $produto->getDataPrimeiraCompra(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Data de fabricação</label>
        <label><?= $produto->getDataFabricacao(); ?></label>
    </div>
    <div class="col-md-6 form-group">
        <label>Data de validade</label>
        <label><?= $produto->getDataValidade(); ?></label>
    </div>
</div>
<br>
<div class="col-md-12 form-group">
    <a href="formulario-altera-produto.php?id=<?= $produto->getId(); ?>" class="btn btn-primary">Alterar</a>
</div>
<?php require_once("rodape.php"); ?>