<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Mensagem.php");
    require_once("class/Funcionario.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
        
    $paginaVariavel = "lista-funcionario";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);
?>
<h1>Lista de funcionarios</h1>
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
            <th>Nome do funcionario</th>
            <th>Cargo</th>
            <th>Login</th>
            <th>RG</th>
            <th>CPF</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $conexao = Conecta::criaConexao();
            $funcionarioDao = new FuncionarioDao($conexao);
            $funcionarios = $funcionarioDao->listaFuncionario();
            foreach ($funcionarios as $funcionario) :
        ?>
        <tr>
            <td><?= $funcionario->getCodigo() ?></td>
            <td><?= $funcionario->getNome() ?></td>
            <td><?= $funcionario->getCargo() ?></td>
            <td><?= $funcionario->getLogin() ?></td>
            <td><?= $funcionario->getRg() ?></td>
            <td><?= $funcionario->getCpf() ?></td>
            <td>
                <a class="btn btn-primary" href="ficha-funcionario.php?id=<?= $funcionario->getId() ?>">Ficha</a>
            </td>
            <td>
                <form action="remove-funcionario.php" method="post">
                    <input type="hidden" name="id" id="c_id"value="<?= $funcionario->getId() ?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php require_once("rodape.php"); ?>