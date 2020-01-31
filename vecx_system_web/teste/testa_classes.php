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

	class Calcula {
		public static function soma1($x, $y) {
			return $x + $y;
		}
		
		public static function soma2($a, $b, $x, $y) {
			return Calcula::soma1($a, $b) + Calcula::soma1($x, $y);
			// return soma1($a, $b) + soma1($x, $y);
		}

		public static function exibeMensagem1($mensagem) {
			return $mensagem;
		}

		public static function exibeMensagem2($mensagem) {
			return Calcula::exibeMensagem1($mensagem);
		}
	}
	
?>
<p>Resultado da função soma1: <?= Calcula::soma1(1, 2); ?></p>
<p>Resultado da função soma2: <?= Calcula::soma2(1, 2, 3, 4); ?></p>
<p>Resultado da função exibeMensagem2: <?= Calcula::exibeMensagem2("Mensagem"); ?></p>
<!-- <form action="testa_classes_resultado.php" method="post">
	<input type="date" name="data_teste" id="data_teste">
	<input type="submit" value="Enviar">
</form> -->
