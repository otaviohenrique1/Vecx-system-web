<?php
    require_once("DadosBasicos.php");

    class Pessoa extends DadosBasicos {
        private $cpf;
        private $rg;
        private $sexo;
        private $dataNascimento;
        private $celular;

        function __construct() {}

        // function __construct($nome, $cpf, $rg, $sexo, $dataNascimento, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $telefone, $celular, $codigo) {
        //     parent::__construct($nome, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $telefone, $codigo);
        //     $this->setCpf($cpf);
        //     $this->setRg($rg);
        //     $this->setSexo($sexo);
        //     $this->setDataNascimento($dataNascimento);
        //     $this->setCelular($celular);
        // }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getRg() {
            return $this->rg;
        }

        public function setRg($rg) {
            $this->rg = $rg;
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($sexo) {
            $this->sexo = $sexo;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getCelular() {
            return $this->celular;
        }

        public function setCelular($celular) {
            $this->celular = $celular;
        }
    }
