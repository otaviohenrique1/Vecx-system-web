<?php
    /*
        Salvar a lista de produtos comprados pelo cliente em um campo na tabela de vendas
    */
    class Venda {
        private $id;
        private $codigo;
        private $precoTotal;
        private $listaProdutos;
        private $quantidadeItens;
        private $dataVenda;
        private $horaVenda;
        private $metodoPagamento;
        private $tipoPagamentoCartao;
        private $quantidadeParcelas;
        private $notaFiscal;
        private $cpfCliente;
        private $nomeFuncionario;
        private $cargoFuncionario;
        
        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getCodigo() {
            return $this->codigo;
        }

        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        public function getPrecoTotal() {
            return $this->precoTotal;
        }

        public function setPrecoTotal($precoTotal) {
            $this->precoTotal = $precoTotal;
        }

        public function getListaProdutos() {
            return $this->listaProdutos;
        }

        public function setListaProdutos($listaProdutos) {
            $this->listaProdutos = $listaProdutos;
        }

        public function getQuantidadeItens() {
            return $this->quantidadeItens;
        }

        public function setQuantidadeItens($quantidadeItens) {
            $this->quantidadeItens = $quantidadeItens;
        }

        public function getDataVenda() {
            return $this->dataVenda;
        }

        public function setDataVenda($dataVenda) {
            $this->dataVenda = $dataVenda;
        }

        public function getHoraVenda() {
            return $this->horaVenda;
        }

        public function setHoraVenda($horaVenda) {
            $this->horaVenda = $horaVenda;
        }

        public function getMetodoPagamento() {
            return $this->metodoPagamento;
        }

        public function setMetodoPagamento($metodoPagamento) {
            $this->metodoPagamento = $metodoPagamento;
        }

        public function getTipoPagamentoCartao() {
            return $this->tipoPagamentoCartao;
        }

        public function setTipoPagamentoCartao($tipoPagamentoCartao) {
            $this->tipoPagamentoCartao = $tipoPagamentoCartao;
        }

        public function getQuantidadeParcelas() {
            return $this->quantidadeParcelas;
        }

        public function setQuantidadeParcelas($quantidadeParcelas) {
            $this->quantidadeParcelas = $quantidadeParcelas;
        }

        public function getNotaFiscal() {
            return $this->notaFiscal;
        }

        public function setNotaFiscal($notaFiscal) {
            $this->notaFiscal = $notaFiscal;
        }

        public function getCpfCliente() {
            return $this->cpfCliente;
        }

        public function setCpfCliente($cpfCliente) {
            $this->cpfCliente = $cpfCliente;
        }

        public function getNomeFuncionario() {
            return $this->nomeFuncionario;
        }

        public function setNomeFuncionario($nomeFuncionario) {
            $this->nomeFuncionario = $nomeFuncionario;
        }

        public function getCargoFuncionario() {
            return $this->cargoFuncionario;
        }

        public function setCargoFuncionario($cargoFuncionario) {
            $this->cargoFuncionario = $cargoFuncionario;
        }
    }
