<?php
    require_once("Cliente.php");
    require_once("Operacoes.php");

    class ClienteDao {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insereCliente(Cliente $cliente) {
            $nome =  mysqli_real_escape_string($this->conexao, $cliente->getNome());
            $cpf = mysqli_real_escape_string($this->conexao, $cliente->getCpf());
            $rg = mysqli_real_escape_string($this->conexao, $cliente->getRg());
            $sexo = mysqli_real_escape_string($this->conexao, $cliente->getSexo());
            $dataNascimento = mysqli_real_escape_string($this->conexao, $cliente->getDataNascimento());
            $email = mysqli_real_escape_string($this->conexao, $cliente->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $cliente->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $cliente->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $cliente->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $cliente->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $cliente->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $cliente->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $cliente->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $cliente->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $cliente->getTelefone());
            $celular = mysqli_real_escape_string($this->conexao, $cliente->getCelular());
            $codigo = mysqli_real_escape_string($this->conexao, $cliente->getCodigo());
            $funcionarioNome = mysqli_real_escape_string($this->conexao, $cliente->getFuncionarioNome());
            $dataCadastro = mysqli_real_escape_string($this->conexao, $cliente->getDataCadastro());
            $horaCadastro = mysqli_real_escape_string($this->conexao, $cliente->getHoraCadastro());

            $query = "INSERT INTO cliente(nome, cpf, rg, sexo, data_nascimento, email, endereco, numero, estado, cidade, bairro, complemento, referencia, cep, telefone, celular, codigo, funcionario_nome, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$cpf}', '{$rg}', '{$sexo}', '{$dataNascimento}', '{$email}', '{$endereco}', {$numero}, '{$estado}', '{$cidade}', '{$bairro}', '{$complemento}', '{$referencia}', {$cep}, '{$telefone}', '{$celular}', '{$codigo}', '{$funcionarioNome}', '{$dataCadastro}', '{$horaCadastro}')";

            return mysqli_query($this->conexao, $query);
        }

        public function alteraCliente(Cliente $cliente) {
            $id =  mysqli_real_escape_string($this->conexao, $cliente->getId());
            $nome =  mysqli_real_escape_string($this->conexao, $cliente->getNome());
            $cpf = mysqli_real_escape_string($this->conexao, $cliente->getCpf());
            $rg = mysqli_real_escape_string($this->conexao, $cliente->getRg());
            $sexo = mysqli_real_escape_string($this->conexao, $cliente->getSexo());
            $dataNascimento = mysqli_real_escape_string($this->conexao, $cliente->getDataNascimento());
            $email = mysqli_real_escape_string($this->conexao, $cliente->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $cliente->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $cliente->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $cliente->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $cliente->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $cliente->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $cliente->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $cliente->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $cliente->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $cliente->getTelefone());
            $celular = mysqli_real_escape_string($this->conexao, $cliente->getCelular());

            $query = "UPDATE cliente SET nome = '{$nome}', sexo = '{$sexo}', data_nascimento = '{$dataNascimento}', email = '{$email}', endereco = '{$endereco}', numero = {$numero}, estado = '{$estado}', cidade = '{$cidade}', bairro = '{$bairro}', complemento = '{$complemento}', referencia = '{$referencia}', cep = {$cep}, cpf = '{$cpf}', rg = '{$rg}', telefone = '{$telefone}', celular = '{$celular}' WHERE id = '{$id}'";

            return mysqli_query($this->conexao, $query);
        }

        public function listaCliente() {
            $clientes = array();
            $resultado = mysqli_query($this->conexao, "SELECT * FROM cliente");
            while ($cliente_array = mysqli_fetch_assoc($resultado)) {
                $cliente = new Cliente();
                $cliente->setId($cliente_array['id']);
                $cliente->setNome($cliente_array['nome']);
                $cliente->setCpf($cliente_array['cpf']);
                $cliente->setRg($cliente_array['rg']);
                $cliente->setCodigo($cliente_array['codigo']);
                array_push($clientes, $cliente);
            }
            return $clientes;
        }

        public function removeCliente($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "DELETE FROM cliente WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function buscaCliente($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "SELECT * FROM cliente WHERE id = '{$id}'";
            $resultado = mysqli_query($this->conexao, $query);
            $cliente_buscado = mysqli_fetch_assoc($resultado);
            $cliente = new Cliente();
            $cliente->setId($cliente_buscado['id']);
            $cliente->setNome($cliente_buscado['nome']);
            $cliente->setCpf($cliente_buscado['cpf']);
            $cliente->setRg($cliente_buscado['rg']);
            $cliente->setSexo($cliente_buscado['sexo']);
            $cliente->setDataNascimento($cliente_buscado['data_nascimento']);
            $cliente->setEmail($cliente_buscado['email']);
            $cliente->setEndereco($cliente_buscado['endereco']);
            $cliente->setNumero($cliente_buscado['numero']);
            $cliente->setEstado($cliente_buscado['estado']);
            $cliente->setCidade($cliente_buscado['cidade']);
            $cliente->setBairro($cliente_buscado['bairro']);
            $cliente->setComplemento($cliente_buscado['complemento']);
            $cliente->setReferencia($cliente_buscado['referencia']);
            $cliente->setCep($cliente_buscado['cep']);
            $cliente->setTelefone($cliente_buscado['telefone']);
            $cliente->setCelular($cliente_buscado['celular']);
            $cliente->setCodigo($cliente_buscado['codigo']);
            $cliente->setFuncionarioNome($cliente_buscado['funcionario_nome']);
            $cliente->setDataCadastro($cliente_buscado['data_cadastro']);
            $cliente->setHoraCadastro($cliente_buscado['hora_cadastro']);
            return $cliente;
        }

        public function buscaCodigo($codigo) {
            $codigo = mysqli_real_escape_string($this->conexao, $codigo);
            $query = "SELECT codigo FROM cliente WHERE codigo = '{$codigo}'";
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
