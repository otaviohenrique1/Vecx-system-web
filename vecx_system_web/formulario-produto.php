<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Listas.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
        
    $paginaVariavel = "formulario-produto";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<form action="adiciona-produto.php" method="post">
    <div class="col-md-12 form-group">
        <label for="c_nome">Nome</label>
        <input type="text" name="nome" id="c_nome" class="form-control">
        <?php Mensagem::colocaMensagemDeSessaoNaTela('nome_vazio', "danger"); ?>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_marca">Marca</label>
            <input type="text" name="marca" id="c_marca" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_quantidade">Quantidade</label>
            <input type="text" name="quantidade" id="c_quantidade" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('quantidade_vazio', "danger"); ?>
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_garantia">Garantia</label>
            <input type="text" name="garantia" id="c_garantia" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_fornecedor_nome">Fornecedor nome</label>
            <input type="text" name="fornecedor_nome" id="c_fornecedor_nome" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_tipo_produto">Tipo de produto</label>
            <input type="text" name="tipo_produto" id="c_tipo_produto" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <label for="c_descricao">Descricao</label>
        <textarea name="descricao" id="c_descricao" cols="30" rows="10"></textarea>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_lote">Lote</label>
            <input type="text" name="lote" id="c_lote" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_peso">Peso</label>
            <input type="text" name="peso" id="c_peso" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_altura">Altura</label>
            <input type="text" name="altura" id="c_altura" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_comprimento">Comprimento</label>
            <input type="text" name="comprimento" id="c_comprimento" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_largura">Largura</label>
            <input type="text" name="largura" id="c_largura" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_espessura">Espessura</label>
            <input type="text" name="espessura" id="c_espessura" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_profundidade">Profundidade</label>
            <input type="text" name="profundidade" id="c_profundidade" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-group">
            <label for="c_cor">Cor</label>
            <input type="text" name="cor" id="c_cor" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <label>Montagem</label>
            <div class="col-md-6 form-check">
                <input type="radio" name="montagem" id="c_sim" value="Sim" class="form-control">
                <label for="c_sim">Sim</label>
            </div>
            <div class="col-md-6 form-check">
                <input type="radio" name="montagem" id="c_nao" value="Nao" class="form-control">
                <label for="c_nao">Não</label>
            </div>
        </div>
        <div class="col-md-4 form-group">
            <label for="c_aplicacao">Aplicacao</label>
            <input type="text" name="aplicacao" id="c_aplicacao" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-group">
            <label for="c_modelo">Modelo</label>
            <input type="text" name="modelo" id="c_modelo" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_vida_util">Vida util</label>
            <input type="text" name="vida_util" id="c_vida_util" class="form-control">
        </div>
        <div class="col-md-4 form-group">
            <label for="c_codigo_barras">Codigo de barras</label>
            <input type="text" name="codigo_barras" id="c_codigo_barras" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('codigo_barras_vazio', "danger"); ?>
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-4 form-group">
            <label for="c_preco_compra">Preço de compra</label>
            <input type="number" name="preco_compra" id="c_preco_compra" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('preco_compra_vazio', "danger"); ?>
        </div>
        <div class="col-md-4 form-group">
            <label for="c_preco_a_vista">Preço a vista</label>
            <input type="number" name="preco_a_vista" id="c_preco_a_vista" class="form-control">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('preco_a_vista_vazio', "danger"); ?>
        </div>
        <div class="col-md-1 form-group">
            <label for="c_quantidade_componentes">Quantidade de componentes</label>
            <input type="number" name="quantidade_componentes" id="c_quantidade_componentes" class="form-control">
        </div>
    </div>
    <div class="col-md-12 form-row">
        <div class="col-md-6 form-group">
            <label for="c_data_primeira_compra">Data da primeira compra</label>
            <input type="date" name="data_primeira_compra" id="c_data_primeira_compra" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_data_fabricacao">Data de fabricação</label>
            <input type="date" name="data_fabricacao" id="c_data_fabricacao" class="form-control">
        </div>
        <div class="col-md-6 form-group">
            <label for="c_data_validade">Data de validade</label>
            <input type="date" name="data_validade" id="c_data_validade" class="form-control">
        </div>
    </div>
    <br>
    <div class="col-md-12 form-group">
        <button type="submit" class="btn btn-primary" id="b_salvar">Cadastrar</button>
    </div>
</form>
<?php require_once("rodape.php"); ?>