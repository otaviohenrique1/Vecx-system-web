<?php
    class Produto {
        private $id;
        private $nome;
        private $marca;
        private $quantidade;
        private $garantia;
        private $descricao;
        private $fornecedorNome;
        private $tipoProduto;
        private $lote;
        private $peso;
        private $altura;
        private $comprimento;
        private $largura;
        private $espessura;
        private $profundidade;
        private $cor;
        private $montagem;
        private $aplicacao;
        private $modelo;
        private $vidaUtil;
        private $precoCompra;
        private $precoaVista;
        private $quantidadeComponentes;
        private $dataPrimeiraCompra;
        private $dataFabricacao;
        private $dataValidade;
        private $codigo;
        private $codigoBarras;
        private $funcionarioNome;
        private $dataCadastro;
        private $horaCadastro;

        function __construct() {}

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getMarca() {
            return $this->marca;
        }

        public function setMarca($marca) {
            $this->marca = $marca;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }
        
        public function getGarantia() {
            return $this->garantia;
        }

        public function setGarantia($garantia) {
            $this->garantia = $garantia;
        }
        
        public function getDescricao() {
            return $this->descricao;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        
        public function getFornecedorNome() {
            return $this->fornecedorNome;
        }

        public function setFornecedorNome($fornecedorNome) {
            $this->fornecedorNome = $fornecedorNome;
        }
        
        public function getTipoProduto() {
            return $this->tipoProduto;
        }

        public function setTipoProduto($tipoProduto) {
            $this->tipoProduto = $tipoProduto;
        }
        
        public function getLote() {
            return $this->lote;
        }

        public function setLote($lote) {
            $this->lote = $lote;
        }
        
        public function getPeso() {
            return $this->peso;
        }

        public function setPeso($peso) {
            $this->peso = $peso;
        }
        
        public function getAltura() {
            return $this->altura;
        }

        public function setAltura($altura) {
            $this->altura = $altura;
        }
        
        public function getComprimento() {
            return $this->comprimento;
        }

        public function setComprimento($comprimento) {
            $this->comprimento = $comprimento;
        }
        
        public function getLargura() {
            return $this->largura;
        }

        public function setLargura($largura) {
            $this->largura = $largura;
        }
        
        public function getEspessura() {
            return $this->espessura;
        }

        public function setEspessura($espessura) {
            $this->espessura = $espessura;
        }
        
        public function getProfundidade() {
            return $this->profundidade;
        }

        public function setProfundidade($profundidade) {
            $this->profundidade = $profundidade;
        }
        
        public function getCor() {
            return $this->cor;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }
        
        public function getMontagem() {
            return $this->montagem;
        }

        public function setMontagem($montagem) {
            $this->montagem = $montagem;
        }
        
        public function getAplicacao() {
            return $this->aplicacao;
        }

        public function setAplicacao($aplicacao) {
            $this->aplicacao = $aplicacao;
        }
        
        public function getModelo() {
            return $this->modelo;
        }

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }
        
        public function getVidaUtil() {
            return $this->vidaUtil;
        }

        public function setVidaUtil($vidaUtil) {
            $this->vidaUtil = $vidaUtil;
        }
        
        public function getPrecoCompra() {
            return $this->precoCompra;
        }

        public function setPrecoCompra($precoCompra) {
            $this->precoCompra = $precoCompra;
        }
        
        public function getPrecoaVista() {
            return $this->precoaVista;
        }

        public function setPrecoaVista($precoaVista) {
            $this->precoaVista = $precoaVista;
        }
        
        public function getQuantidadeComponentes() {
            return $this->quantidadeComponentes;
        }

        public function setQuantidadeComponentes($quantidadeComponentes) {
            $this->quantidadeComponentes = $quantidadeComponentes;
        }
        
        public function getDataPrimeiraCompra() {
            return $this->dataPrimeiraCompra;
        }

        public function setDataPrimeiraCompra($dataPrimeiraCompra) {
            $this->dataPrimeiraCompra = $dataPrimeiraCompra;
        }
        
        public function getDataFabricacao() {
            return $this->dataFabricacao;
        }

        public function setDataFabricacao($dataFabricacao) {
            $this->dataFabricacao = $dataFabricacao;
        }
        
        public function getDataValidade() {
            return $this->dataValidade;
        }

        public function setDataValidade($dataValidade) {
            $this->dataValidade = $dataValidade;
        }

        public function getCodigo() {
            return $this->codigo;
        }

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function getCodigoBarras() {
            return $this->codigoBarras;
        }

        public function setCodigoBarras($codigoBarras) {
            $this->codigoBarras = $codigoBarras;
        }

        public function getFuncionarioNome() {
            return $this->funcionarioNome;
        }

        public function setFuncionarioNome($funcionarioNome) {
            $this->funcionarioNome = $funcionarioNome;
        }

        public function getDataCadastro() {
            return $this->dataCadastro;
        }

        public function setDataCadastro($dataCadastro) {
            $this->dataCadastro = $dataCadastro;
        }

        public function getHoraCadastro() {
            return $this->horaCadastro;
        }

        public function setHoraCadastro($horaCadastro) {
            $this->horaCadastro = $horaCadastro;
        }
    }
