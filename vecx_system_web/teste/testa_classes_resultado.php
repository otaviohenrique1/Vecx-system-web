<?php
    // require_once("class/Empresa.php");
    // require_once("class/Funcionario.php");
    // require_once("class/Cliente.php");

    // $funcionario = new Funcionario("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
	// $funcionario->setNome("Juca");
	// imprime($funcionario->getNome());
	
	// $empresa = new Empresa("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
	// $empresa->setNome("Pombo");
	// imprime($empresa->getNome());
	
	// $cliente = new Cliente("", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "");
	// $cliente->setNome("Vaca");
	// imprime($cliente->getNome());
	
	// function imprime($dado) {
	// 	echo $dado . "<br>";
	// }
	function trataData($data) {
		$novaData = strtotime($data);
		return date('Y-m-d', $novaData);
	}

	$data1 = $_POST["data_teste"];
	echo "<p>" . $data1 . "</p>";
	echo "<p>" . trataData($data1) . "</p>";
?>
<a href="testa_classes.php">Voltar</a>