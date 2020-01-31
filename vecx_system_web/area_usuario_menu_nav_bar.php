<?php
    require_once("class/Conecta.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    $conexao = Conecta::criaConexao();
    $funcionarioDao = new FuncionarioDao($conexao);
    $funcionario = $funcionarioDao->listaFuncionario();
    // session_start();
?>
<div class="form-group">
    <p>Usuario: <?= $_SESSION["usuario_logado"];?></p>
    <p>Cargo: <?= $_SESSION["usuario_cargo"]; ?></p>
    <!-- <a href="ficha-funcionario.php?id=<?php //echo $funcionario->getId(); ?>">Ficha</a> -->
    <a href="logout.php" class="btn btn-primary">Deslogar</a>
</div>