<?php
    require_once("Produto.php");
    require_once("Operacoes.php");

    class ProdutoDao {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insereProduto(Produto $produto) {
            $nome = mysqli_real_escape_string($this->conexao, $produto->getNome());
            $marca = mysqli_real_escape_string($this->conexao, $produto->getMarca());
            $quantidade = mysqli_real_escape_string($this->conexao, $produto->getQuantidade());
            $garantia = mysqli_real_escape_string($this->conexao, $produto->getGarantia());
            $descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
            $fornecedorNome = mysqli_real_escape_string($this->conexao, $produto->getFornecedorNome());
            $tipoProduto = mysqli_real_escape_string($this->conexao, $produto->getTipoProduto());
            $lote = mysqli_real_escape_string($this->conexao, $produto->getLote());
            $peso = mysqli_real_escape_string($this->conexao, $produto->getPeso());
            $altura = mysqli_real_escape_string($this->conexao, $produto->getAltura());
            $comprimento = mysqli_real_escape_string($this->conexao, $produto->getComprimento());
            $largura = mysqli_real_escape_string($this->conexao, $produto->getLargura());
            $espessura = mysqli_real_escape_string($this->conexao, $produto->getEspessura());
            $profundidade = mysqli_real_escape_string($this->conexao, $produto->getProfundidade());
            $cor = mysqli_real_escape_string($this->conexao, $produto->getCor());
            $montagem = mysqli_real_escape_string($this->conexao, $produto->getMontagem());
            $aplicacao = mysqli_real_escape_string($this->conexao, $produto->getAplicacao());
            $modelo = mysqli_real_escape_string($this->conexao, $produto->getModelo());
            $vidaUtil = mysqli_real_escape_string($this->conexao, $produto->getVidaUtil());
            $precoCompra = mysqli_real_escape_string($this->conexao, $produto->getPrecoCompra());
            $precoaVista = mysqli_real_escape_string($this->conexao, $produto->getPrecoaVista());
            $quantidadeComponentes = mysqli_real_escape_string($this->conexao, $produto->getQuantidadeComponentes());
            $dataPrimeiraCompra = mysqli_real_escape_string($this->conexao, $produto->getDataPrimeiraCompra());
            $dataFabricacao = mysqli_real_escape_string($this->conexao, $produto->getDataFabricacao());
            $dataValidade = mysqli_real_escape_string($this->conexao, $produto->getDataValidade());
            $codigo = mysqli_real_escape_string($this->conexao, $produto->getCodigo());
            $codigoBarras = mysqli_real_escape_string($this->conexao, $produto->getCodigoBarras());
            $funcionarioNome = mysqli_real_escape_string($this->conexao, $produto->getFuncionarioNome());
            $dataCadastro = mysqli_real_escape_string($this->conexao, $produto->getDataCadastro());
            $horaCadastro = mysqli_real_escape_string($this->conexao, $produto->getHoraCadastro());
            $query = "INSERT INTO produto (nome, marca, quantidade, garantia, descricao, fornecedor_nome, tipo_produto, lote, peso, altura, comprimento, largura, espessura, profundidade, cor, montagem, aplicacao, modelo, vida_util, preco_compra, preco_a_vista, quantidade_componentes, data_primeira_compra, data_fabricacao, data_validade, codigo, codigo_barras, funcionario_nome, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$marca}', {$quantidade}, '{$garantia}', '{$descricao}', '{$fornecedorNome}', '{$tipoProduto}', '{$lote}', '{$peso}', '{$altura}', '{$comprimento}', '{$largura}', '{$espessura}', '{$profundidade}', '{$cor}', '{$montagem}', '{$aplicacao}', '{$modelo}', '{$vidaUtil}', {$precoCompra}, {$precoaVista}, '{$quantidadeComponentes}', '{$dataPrimeiraCompra}', '{$dataFabricacao}', '{$dataValidade}', '{$codigo}', '{$codigoBarras}', '{$funcionarioNome}', '{$dataCadastro}', '{$horaCadastro}')";
            return mysqli_query($this->conexao, $query);
        }

        public function alteraProduto(Produto $produto) {
            $id = mysqli_real_escape_string($this->conexao, $produto->getId());
            $nome = mysqli_real_escape_string($this->conexao, $produto->getNome());
            $marca = mysqli_real_escape_string($this->conexao, $produto->getMarca());
            $quantidade = mysqli_real_escape_string($this->conexao, $produto->getQuantidade());
            $garantia = mysqli_real_escape_string($this->conexao, $produto->getGarantia());
            $descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
            $fornecedorNome = mysqli_real_escape_string($this->conexao, $produto->getFornecedorNome());
            $tipoProduto = mysqli_real_escape_string($this->conexao, $produto->getTipoProduto());
            $lote = mysqli_real_escape_string($this->conexao, $produto->getLote());
            $peso = mysqli_real_escape_string($this->conexao, $produto->getPeso());
            $altura = mysqli_real_escape_string($this->conexao, $produto->getAltura());
            $comprimento = mysqli_real_escape_string($this->conexao, $produto->getComprimento());
            $largura = mysqli_real_escape_string($this->conexao, $produto->getLargura());
            $espessura = mysqli_real_escape_string($this->conexao, $produto->getEspessura());
            $profundidade = mysqli_real_escape_string($this->conexao, $produto->getProfundidade());
            $cor = mysqli_real_escape_string($this->conexao, $produto->getCor());
            $montagem = mysqli_real_escape_string($this->conexao, $produto->getMontagem());
            $aplicacao = mysqli_real_escape_string($this->conexao, $produto->getAplicacao());
            $modelo = mysqli_real_escape_string($this->conexao, $produto->getModelo());
            $vidaUtil = mysqli_real_escape_string($this->conexao, $produto->getVidaUtil());
            $precoCompra = mysqli_real_escape_string($this->conexao, $produto->getPrecoCompra());
            $precoaVista = mysqli_real_escape_string($this->conexao, $produto->getPrecoaVista());
            $quantidadeComponentes = mysqli_real_escape_string($this->conexao, $produto->getQuantidadeComponentes());
            $dataPrimeiraCompra = mysqli_real_escape_string($this->conexao, $produto->getDataPrimeiraCompra());
            $dataFabricacao = mysqli_real_escape_string($this->conexao, $produto->getDataFabricacao());
            $dataValidade = mysqli_real_escape_string($this->conexao, $produto->getDataValidade());
            $codigoBarras = mysqli_real_escape_string($this->conexao, $produto->getCodigoBarras());
            $query = "UPDATE produto SET nome = '{$nome}', marca = '{$marca}', quantidade = {$quantidade}, garantia = '{$garantia}', descricao = '{$descricao}', fornecedor_nome = '{$fornecedorNome}', tipo_produto = '{$tipoProduto}', lote = '{$lote}', peso = '{$peso}', altura = '{$altura}', comprimento = '{$comprimento}', largura = '{$largura}', espessura = '{$espessura}', profundidade = '{$profundidade}', cor = '{$cor}', montagem = '{$montagem}', aplicacao = '{$aplicacao}', modelo = '{$modelo}', vida_util = '{$vidaUtil}', preco_compra = {$precoCompra}, preco_a_vista = {$precoaVista}, quantidade_componentes = '{$quantidadeComponentes}', data_primeira_compra = '{$dataPrimeiraCompra}', data_fabricacao = '{$dataFabricacao}', data_validade = '{$dataValidade}', codigo_barras = '{$codigoBarras}' WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function listaProduto() {
            $produtos = array();
            $resultado = mysqli_query($this->conexao, "SELECT * FROM produto");
            while ($produto_array = mysqli_fetch_assoc($resultado)) {
                $produto = new Produto();
                $produto->setId($produto_array['id']);
                $produto->setCodigo($produto_array['codigo']);
                $produto->setNome($produto_array['nome']);
                $produto->setPrecoaVista($produto_array['preco_a_vista']);
                $produto->setQuantidade($produto_array['quantidade']);
                array_push($produtos, $produto);
            }
            return $produtos;
        }

        public function atualizaEstoque($id, $quantidade, $valor) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $quantidade = mysqli_real_escape_string($this->conexao, $quantidade);
            $quantidade = $quantidade + $valor;
            $query = "UPDATE produto SET quantidade = {$quantidade} WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function removeProduto($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "DELETE FROM produto WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function buscaProduto($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "SELECT * FROM produto WHERE id = {$id}";
            $resultado = mysqli_query($this->conexao, $query);
            $funcionario_buscado = mysqli_fetch_assoc($resultado);
            $produto = new Produto();
            $produto->setId($funcionario_buscado['id']);
            $produto->setNome($funcionario_buscado['nome']);
            $produto->setMarca($funcionario_buscado['marca']);
            $produto->setQuantidade($funcionario_buscado['quantidade']);
            $produto->setGarantia($funcionario_buscado['garantia']);
            $produto->setDescricao($funcionario_buscado['descricao']);
            $produto->setFornecedorNome($funcionario_buscado['fornecedor_nome']);
            $produto->setTipoProduto($funcionario_buscado['tipo_produto']);
            $produto->setLote($funcionario_buscado['lote']);
            $produto->setPeso($funcionario_buscado['peso']);
            $produto->setAltura($funcionario_buscado['altura']);
            $produto->setComprimento($funcionario_buscado['comprimento']);
            $produto->setLargura($funcionario_buscado['largura']);
            $produto->setEspessura($funcionario_buscado['espessura']);
            $produto->setProfundidade($funcionario_buscado['profundidade']);
            $produto->setCor($funcionario_buscado['cor']);
            $produto->setMontagem($funcionario_buscado['montagem']);
            $produto->setAplicacao($funcionario_buscado['aplicacao']);
            $produto->setModelo($funcionario_buscado['modelo']);
            $produto->setVidaUtil($funcionario_buscado['vida_util']);
            $produto->setPrecoCompra($funcionario_buscado['preco_compra']);
            $produto->setPrecoaVista($funcionario_buscado['preco_a_vista']);
            $produto->setQuantidadeComponentes($funcionario_buscado['quantidade_componentes']);
            $produto->setDataPrimeiraCompra($funcionario_buscado['data_primeira_compra']);
            $produto->setDataFabricacao($funcionario_buscado['data_fabricacao']);
            $produto->setDataValidade($funcionario_buscado['data_validade']);
            $produto->setCodigo($funcionario_buscado['codigo']);
            $produto->setCodigoBarras($funcionario_buscado['codigo_barras']);
            $produto->setFuncionarioNome($funcionario_buscado['funcionario_nome']);
            $produto->setDataCadastro($funcionario_buscado['data_cadastro']);
            $produto->setHoraCadastro($funcionario_buscado['hora_cadastro']);
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
