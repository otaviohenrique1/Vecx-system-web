<?php
    require_once("Operacoes.php");
    class ProdutoDao {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function buscaProduto($codigo) {
            $id = mysqli_real_escape_string($this->conexao, $codigo);
            $query = "SELECT * FROM produto WHERE codigo = {$codigo}";
            $resultado = mysqli_query($this->conexao, $query);
            $funcionario_buscado = mysqli_fetch_assoc($resultado);
            $produto = new Produto();
            $produto->setNome($funcionario_buscado['nome']);
            $produto->setPrecoCompra($funcionario_buscado['preco_compra']);
            return $produto;
        }

        public function buscaCodigo($codigo) {
            $codigo = mysqli_real_escape_string($this->conexao, $codigo);
            $query = "SELECT codigo FROM produto WHERE codigo = '{$codigo}'";
            $resultado = mysqli_query($this->conexao, $query);
            $codigo_buscado = mysqli_fetch_assoc($resultado);
            return $codigo_buscado;
        }

        public function validaCodigo($codigo) {
            if ($this->buscaCodigo($codigo)) {
                return Operacoes::geraCodigo();
            }
            return $codigo;
        }
    }