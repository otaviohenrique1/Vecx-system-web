<?php
    class Pagamento {
        private $metodoPagamento;
        private $tipoPagamentoCartao;

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
    }
