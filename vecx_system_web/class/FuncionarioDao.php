<?php
    require_once("Funcionario.php");
    require_once("Operacoes.php");

    class FuncionarioDao {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insereFuncionario(Funcionario $funcionario) {
            $nome =  mysqli_real_escape_string($this->conexao, $funcionario->getNome());
            $cpf = mysqli_real_escape_string($this->conexao, $funcionario->getCpf());
            $rg = mysqli_real_escape_string($this->conexao, $funcionario->getRg());
            $sexo = mysqli_real_escape_string($this->conexao, $funcionario->getSexo());
            $dataNascimento = mysqli_real_escape_string($this->conexao, $funcionario->getDataNascimento());
            $email = mysqli_real_escape_string($this->conexao, $funcionario->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $funcionario->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $funcionario->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $funcionario->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $funcionario->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $funcionario->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $funcionario->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $funcionario->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $funcionario->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $funcionario->getTelefone());
            $celular = mysqli_real_escape_string($this->conexao, $funcionario->getCelular());
            $cargo = mysqli_real_escape_string($this->conexao, $funcionario->getCargo());
            $login = mysqli_real_escape_string($this->conexao, $funcionario->getLogin());
            $senha = mysqli_real_escape_string($this->conexao, $funcionario->getSenha());
            $carteiraTrabalho = mysqli_real_escape_string($this->conexao, $funcionario->getCarteiraTrabalho());
            $salario = mysqli_real_escape_string($this->conexao, $funcionario->getSalario());
            $codigo = mysqli_real_escape_string($this->conexao, $funcionario->getCodigo());
            $funcionarioNome = mysqli_real_escape_string($this->conexao, $funcionario->getFuncionarioNome());
            $dataCadastro = mysqli_real_escape_string($this->conexao, $funcionario->getDataCadastro());
            $horaCadastro = mysqli_real_escape_string($this->conexao, $funcionario->getHoraCadastro());

            $query = "INSERT INTO funcionario(nome, cpf, rg, sexo, data_nascimento, email, endereco, numero, estado, cidade, bairro, complemento, referencia, cep, telefone, celular, cargo, login, senha, carteira_trabalho, salario, codigo, funcionario_nome, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$cpf}', '{$rg}', '{$sexo}', '{$dataNascimento}', '{$email}', '{$endereco}', {$numero}, '{$estado}', '{$cidade}', '{$bairro}', '{$complemento}', '{$referencia}', {$cep}, '{$telefone}', '{$celular}', '{$cargo}', '{$login}', '{$senha}', '{$carteiraTrabalho}', {$salario}, {$codigo}', '{$funcionarioNome}', '{$dataCadastro}', '{$horaCadastro}')";

            return mysqli_query($this->conexao, $query);
        }

        public function alteraFuncionario(Funcionario $funcionario) {
            $id =  mysqli_real_escape_string($this->conexao, $funcionario->getId());
            $nome =  mysqli_real_escape_string($this->conexao, $funcionario->getNome());
            $cpf = mysqli_real_escape_string($this->conexao, $funcionario->getCpf());
            $rg = mysqli_real_escape_string($this->conexao, $funcionario->getRg());
            $sexo = mysqli_real_escape_string($this->conexao, $funcionario->getSexo());
            $dataNascimento = mysqli_real_escape_string($this->conexao, $funcionario->getDataNascimento());
            $email = mysqli_real_escape_string($this->conexao, $funcionario->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $funcionario->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $funcionario->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $funcionario->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $funcionario->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $funcionario->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $funcionario->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $funcionario->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $funcionario->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $funcionario->getTelefone());
            $celular = mysqli_real_escape_string($this->conexao, $funcionario->getCelular());
            $cargo = mysqli_real_escape_string($this->conexao, $funcionario->getCargo());
            $login = mysqli_real_escape_string($this->conexao, $funcionario->getLogin());
            $senha = mysqli_real_escape_string($this->conexao, $funcionario->getSenha());
            $carteiraTrabalho = mysqli_real_escape_string($this->conexao, $funcionario->getCarteiraTrabalho());
            $salario = mysqli_real_escape_string($this->conexao, $funcionario->getSalario());

            $query = "UPDATE funcionario SET nome = '{$nome}', sexo = '{$sexo}', data_nascimento = '{$dataNascimento}', email = '{$email}', endereco = '{$endereco}', numero = {$numero}, estado = '{$estado}', cidade = '{$cidade}', bairro = '{$bairro}', complemento = '{$complemento}', referencia = '{$referencia}', cep = {$cep}, cpf = '{$cpf}', rg = '{$rg}', telefone = '{$telefone}', celular = '{$celular}', cargo = '{$cargo}', login = '{$login}', senha = '{$senha}', carteira_trabalho = '{$carteiraTrabalho}', salario = {$salario} WHERE id = '{$id}'";

            return mysqli_query($this->conexao, $query);
        }

        public function listaFuncionario() {
            $funcionarios = array();
            $resultado = mysqli_query($this->conexao, "SELECT * FROM funcionario");
            while ($funcionario_array = mysqli_fetch_assoc($resultado)) {
                $funcionario = new Funcionario();
                $funcionario->setId($funcionario_array['id']);
                $funcionario->setCodigo($funcionario_array['codigo']);
                $funcionario->setNome($funcionario_array['nome']);
                $funcionario->setCpf($funcionario_array['cpf']);
                $funcionario->setRg($funcionario_array['rg']);
                $funcionario->setCargo($funcionario_array['cargo']);
                $funcionario->setLogin($funcionario_array['login']);
                array_push($funcionarios, $funcionario);
            }
            return $funcionarios;
        }

        public function removeFuncionario($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "DELETE FROM funcionario WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function buscaFuncionario($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "SELECT * FROM funcionario WHERE id = '{$id}'";
            $resultado = mysqli_query($this->conexao, $query);
            $funcionario_buscado = mysqli_fetch_assoc($resultado);
            $funcionario = new Funcionario();
            $funcionario->setId($funcionario_buscado['id']);
            $funcionario->setNome($funcionario_buscado['nome']);
            $funcionario->setCpf($funcionario_buscado['cpf']);
            $funcionario->setRg($funcionario_buscado['rg']);
            $funcionario->setSexo($funcionario_buscado['sexo']);
            $funcionario->setDataNascimento($funcionario_buscado['data_nascimento']);
            $funcionario->setEmail($funcionario_buscado['email']);
            $funcionario->setEndereco($funcionario_buscado['endereco']);
            $funcionario->setNumero($funcionario_buscado['numero']);
            $funcionario->setEstado($funcionario_buscado['estado']);
            $funcionario->setCidade($funcionario_buscado['cidade']);
            $funcionario->setBairro($funcionario_buscado['bairro']);
            $funcionario->setComplemento($funcionario_buscado['complemento']);
            $funcionario->setReferencia($funcionario_buscado['referencia']);
            $funcionario->setCep($funcionario_buscado['cep']);
            $funcionario->setTelefone($funcionario_buscado['telefone']);
            $funcionario->setCelular($funcionario_buscado['celular']);
            $funcionario->setCodigo($funcionario_buscado['codigo']);
            $funcionario->setCargo($funcionario_buscado['cargo']);
            $funcionario->setLogin($funcionario_buscado['login']);
            $funcionario->setSenha($funcionario_buscado['senha']);
            $funcionario->setCarteiraTrabalho($funcionario_buscado['carteira_trabalho']);
            $funcionario->setSalario($funcionario_buscado['salario']);
            $funcionario->setFuncionarioNome($funcionario_buscado['funcionario_nome']);
            $funcionario->setDataCadastro($funcionario_buscado['data_cadastro']);
            $funcionario->setHoraCadastro($funcionario_buscado['hora_cadastro']);
            return $funcionario;
        }

        public function buscaLoginFuncionario($usuario, $senha) {
            $usuario = mysqli_real_escape_string($this->conexao, $usuario);
            $senha = mysqli_real_escape_string($this->conexao, $senha);
            $query = "SELECT id, nome, cargo, codigo FROM funcionario WHERE login = '{$usuario}' AND senha = '{$senha}'";
            $resultado = mysqli_query($this->conexao, $query);
            $funcionario_buscado = mysqli_fetch_assoc($resultado);
            $funcionario = new Funcionario();
            $funcionario->setId($funcionario_buscado['id']);
            $funcionario->setNome($funcionario_buscado['nome']);
            $funcionario->setCargo($funcionario_buscado['cargo']);
            $funcionario->setCodigo($funcionario_buscado['codigo']);
            return $funcionario;
        }
        
        public function buscaCodigo($codigo) {
            $codigo = mysqli_real_escape_string($this->conexao, $codigo);
            $query = "SELECT codigo FROM funcionario WHERE codigo = '{$codigo}'";
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
