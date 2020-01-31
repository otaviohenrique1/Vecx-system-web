<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/Cliente.php");
    require_once("class/ClienteDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "lista-cliente";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<h1>Lista de clientes</h1>
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
            <th>Nome</th>
            <th>RG</th>
            <th>CPF</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conexao = Conecta::criaConexao();
            $clienteDao = new ClienteDao($conexao);
            $clientes = $clienteDao->listaCliente();
            foreach ($clientes as $cliente) :
        ?>
        <tr>
            <td><?= $cliente->getCodigo() ?></td>
            <td><?= $cliente->getNome() ?></td>
            <td><?= $cliente->getRg() ?></td>
            <td><?= $cliente->getCpf() ?></td>
            <td>
                <a class="btn btn-primary" href="ficha-cliente.php?id=<?= $cliente->getId() ?>">Ficha</a>
            </td>
            <td>
                <form action="remove-cliente.php" method="post">
                    <input type="hidden" name="id" id="c_id" value="<?= $cliente->getId() ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require_once("rodape.php"); ?>