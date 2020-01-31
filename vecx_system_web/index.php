<?php
    require_once("cabecalho.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
?>
<h1>Bem-vindo</h1>
<h2>Login</h2>
<div class="col-md-12">
    <form action="login.php" method="post">
        <div class="form-group col-md-12">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('mensagem_login_invalido', "danger"); ?>
        </div>
        <div class="form-group col-md-12">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('mensagem_acesso_invalido', "danger"); ?>
        </div>
        <div class="form-group col-md-12">
            <?php Mensagem::colocaMensagemDeSessaoNaTela('mensagem_deslogado', "success"); ?>
        </div>
        <div class="form-group col-md-12">
            <label for="c_usuario">Usuario</label>
            <input type="text" name="usuario" id="c_usuario" class="form-control" 
                <?php Mensagem::colocaDadoDeSessaoEmCampo('usuario_valor'); ?>
            >
            <?php Mensagem::colocaMensagemDeSessaoNaTela('usuario_vazio', "danger"); ?>
        </div>
        <div class="form-group col-md-12">
            <label for="c_senha">Senha</label>
            <input type="password" name="senha" id="c_senha" class="form-control"
                <?php Mensagem::colocaDadoDeSessaoEmCampo('senha_valor'); ?>
            >
            <?php Mensagem::colocaMensagemDeSessaoNaTela('senha_vazio', "danger"); ?>
        </div>
        <div class="form-group col-md-12">
            <button type="submit" class="btn btn-primary">Entrar</button>
        </div>
    </form>
</div>
<?php require_once("rodape.php"); ?>