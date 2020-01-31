<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/Produto.php");
    require_once("class/ProdutoDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    
    $paginaVariavel = "lista-produto";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<h1>Lista de produtos</h1>
<div class="form-group col-md-12">
    <?php
        Mensagem::colocaMensagemDeSessaoNaTela('mensagem_acesso_invalido', "danger");
        Mensagem::colocaMensagemDeSessaoNaTela('mensagem_removido', "success");
        Mensagem::colocaMensagemDeSessaoNaTela('mensagem_erro_removido', "danger");
    ?>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nome do produto</th>
            <th>Preço a vista</th>
            <th>Quantidade</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conexao = Conecta::criaConexao();
            $produtoDao = new ProdutoDao($conexao);
            $produtos = $produtoDao->listaProduto();
            foreach ($produtos as $produto) :
        ?>
        <tr>
            <td><?= $produto->getCodigo() ?></td>
            <td><?= $produto->getNome() ?></td>
            <td><?= $produto->getPrecoaVista() ?></td>
            <td><?= $produto->getQuantidade() ?></td>
            <td>
                <!-- Para teste -->
                <form action="altera-estoque.php" method="post">
                    <input type="hidden" name="e_id" id="h_id" value="<?= $produto->getId() ?>">
                    <input type="hidden" name="e_quantidade" id="h_quantidade" value="<?= $produto->getQuantidade() ?>">
                    <label for="c_valor">Valor</label>
                    <input type="number" name="valor" id="c_valor" class="form-control">
                    <button type="submit" class="btn btn-primary">Estoque</button>
                </form>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal">Estoque</button>
                <div class="modal fade" id="estoqueModal" tabindex="-1" role="dialog" aria-labelledby="estoqueModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="estoqueModalLabel">Estoque</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="altera-estoque.php" method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="e_id" id="h_id" value="<?php //$produto->getId() ?>">
                                    <input type="hidden" name="e_quantidade" id="h_quantidade" value="<?php //$produto->getQuantidade() ?>">
                                    <div class="form-group">
                                        <label for="c_valor">Valor</label>
                                        <input type="number" name="valor" id="c_valor" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </td>
            <td>
                <a class="btn btn-primary" href="ficha-produto.php?id=<?= $produto->getId() ?>">Ficha</a>
            </td>
            <td>
                <form action="remove-produto.php" method="post">
                    <input type="hidden" name="r_id" id="c_id" value="<?= $produto->getId() ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require_once("rodape.php"); ?>