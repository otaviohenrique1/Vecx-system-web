<?php
    require_once("Pessoa.php");

    class Funcionario extends Pessoa {
        private $cargo;
        private $login;
        private $senha;
        private $carteiraTrabalho;
        private $salario;

        function __construct() {}

        // function __construct($nome, $sexo, $dataNascimento, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $cpf, $rg, $telefone, $celular, $cargo, $login, $senha, $carteiraTrabalho, $salario, $codigo) {
        //     parent::__construct($nome, $sexo, $dataNascimento, $email, $endereco, $numero, $estado, $cidade, $bairro, $complemento, $referencia, $cep, $cpf, $rg, $telefone, $celular, $codigo);
        //     $this->setcargo($cargo);
        //     $this->setLogin($login);
        //     $this->setSenha($senha);
        //     $this->setCarteiraTrabalho($carteiraTrabalho);
        //     $this->setSalario($salario);
        // }

        public function getCargo() {
            return $this->cargo;
        }

        public function setCargo($cargo) {
            $this->cargo = $cargo;
        }

        public function getLogin() {
            return $this->login;
        }

        public function setLogin($login) {
            $this->login = $login;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getCarteiraTrabalho() {
            return $this->carteiraTrabalho;
        }

        public function setCarteiraTrabalho($carteiraTrabalho) {
            $this->carteiraTrabalho = $carteiraTrabalho;
        }

        public function getSalario() {
            return $this->salario;
        }

        public function setSalario($salario) {
            $this->salario = $salario;
        }
    }
