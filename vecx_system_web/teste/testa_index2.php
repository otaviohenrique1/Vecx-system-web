<?php
    require_once("../cabecalho.php");
    require_once("../class/Conecta.php");
    require_once("../class/Funcionario.php");
    require_once("../class/FuncionarioDao.php");

    // $usuario = "funcionario1";
    // $senha = "funcionario1";
    // $conexao = Conecta::criaConexao();
    // $funcionarioDao = new FuncionarioDao($conexao);
    // $funcionario = $funcionarioDao->buscaLoginFuncionario($usuario, $senha);
?>
<!-- <p><?php //echo $funcionario->getId();?></p>
<p><?php //echo $funcionario->getNome();?></p>
<p><?php //echo $funcionario->getCargo();?></p>
<p><?php //echo $funcionario->getCodigo();?></p> -->
<!-- <form action="#" method="post">
    <label for="codigo">Codigo</label>
    <input type="number" name="codigo" id="codigo">
    <input type="submit" value="Validar">
</form> -->
<?php
    // $conexao = Conecta::criaConexao();
    // $funcionarioDao = new FuncionarioDao($conexao);
    // $codigoBuscado = isset($_POST['codigo']) ? $_POST['codigo'] : "";
    // $codigo = $funcionarioDao->validaCodigo($codigoBuscado);
?>
<!-- <p><?php //echo $codigo;?></p> -->
<?php
    function mostraMensagem($tipo, $mensagem) {
        return "<p class='alert alert-$tipo'>$mensagem</p>";
    }
    echo mostraMensagem("success", "Funcionario cadastrado com sucesso!");
?>
