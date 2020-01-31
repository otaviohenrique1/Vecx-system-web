<?php
    require_once("DadosBasicos.php");

    class Empresa extends DadosBasicos {
        private $cnpj;
        private $razaoSocial;
        private $inscricaoEstadual;
        private $inscricaoNumero;
        private $tipoEmpresa;

        function __construct() {}

        // function __construct($nome, $cnpj, $razaoSocial, $inscricaoEstadual, $inscricaoNumero, $tipoEmpresa, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $telefone, $codigo) {
        //     parent::__construct($nome, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $telefone, $codigo);
        //     $this->setCnpj($cnpj);
        //     $this->setRazaoSocial($razaoSocial);
        //     $this->setInscricaoEstadual($inscricaoEstadual);
        //     $this->setInscricaoNumero($inscricaoNumero);
        //     $this->setTipoEmpresa($tipoEmpresa);
        // }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function getRazaoSocial() {
            return $this->razaoSocial;
        }

        public function setRazaoSocial($razaoSocial) {
            $this->razaoSocial = $razaoSocial;
        }

        public function getInscricaoEstadual() {
            return $this->inscricaoEstadual;
        }

        public function setInscricaoEstadual($inscricaoEstadual) {
            $this->inscricaoEstadual = $inscricaoEstadual;
        }

        public function getInscricaoNumero() {
            return $this->inscricaoNumero;
        }

        public function setInscricaoNumero($inscricaoNumero) {
            $this->inscricaoNumero = $inscricaoNumero;
        }

        public function getTipoEmpresa() {
            return $this->tipoEmpresa;
        }

        public function setTipoEmpresa($tipoEmpresa) {
            $this->tipoEmpresa = $tipoEmpresa;
        }
    }
