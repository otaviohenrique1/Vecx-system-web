<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/Empresa.php");
    require_once("class/EmpresaDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();

    $paginaVariavel = "lista-empresa";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<h1>Lista de empresas</h1>
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
            <th>CNPJ</th>
            <th>Tipo de empresa</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conexao = Conecta::criaConexao();
            $empresaDao = new EmpresaDao($conexao);
            $empresas = $empresaDao->listaEmpresa();
            foreach ($empresas as $empresa) :
        ?>
        <tr>
            <td><?= $empresa->getCodigo() ?></td>
            <td><?= $empresa->getNome() ?></td>
            <td><?= $empresa->getCnpj() ?></td>
            <td><?= $empresa->getTipoEmpresa() ?></td>
            <td>
                <a class="btn btn-primary" href="ficha-funcionario.php?id=<?= $empresa->getId() ?>">Ficha</a>
            </td>
            <td>
                <form action="remove-empresa.php" method="post">
                    <input type="hidden" name="id" id="c_id"value="<?= $empresa->getId() ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require_once("rodape.php"); ?>