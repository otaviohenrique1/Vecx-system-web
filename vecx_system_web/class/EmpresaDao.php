<?php
    require_once("Empresa.php");
    require_once("Operacoes.php");

    class EmpresaDao {
        function __construct($conexao) {
            $this->conexao = $conexao;
        }

        public function insereEmpresa(Empresa $empresa) {
            $nome =  mysqli_real_escape_string($this->conexao, $empresa->getNome());
            $cnpj = mysqli_real_escape_string($this->conexao, $empresa->getCnpj());
            $razaoSocial = mysqli_real_escape_string($this->conexao, $empresa->getRazaoSocial());
            $inscricaoEstadual = mysqli_real_escape_string($this->conexao, $empresa->getInscricaoEstadual());
            $inscricaoNumero = mysqli_real_escape_string($this->conexao, $empresa->getInscricaoNumero());
            $email = mysqli_real_escape_string($this->conexao, $empresa->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $empresa->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $empresa->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $empresa->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $empresa->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $empresa->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $empresa->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $empresa->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $empresa->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $empresa->getTelefone());
            $tipoEmpresa = mysqli_real_escape_string($this->conexao, $empresa->getTipoEmpresa());
            $codigo = mysqli_real_escape_string($this->conexao, $empresa->getCodigo());
            $funcionarioNome = mysqli_real_escape_string($this->conexao, $empresa->getFuncionarioNome());
            $dataCadastro = mysqli_real_escape_string($this->conexao, $empresa->getDataCadastro());
            $horaCadastro = mysqli_real_escape_string($this->conexao, $empresa->getHoraCadastro());

            $query = "INSERT INTO empresa(nome, cnpj, razao_social, inscricao_estadual, inscricao_numero, tipo_empresa, email, endereco, numero, estado, cidade, bairro, complemento, referencia, cep, telefone, codigo, funcionario, data_cadastro, hora_cadastro) VALUES ('{$nome}', '{$cnpj}', '{$razaoSocial}', '{$inscricaoEstadual}', '{$inscricaoNumero}', '{$tipoEmpresa}', '{$email}', '{$endereco}', {$numero}, '{$estado}', '{$cidade}', '{$bairro}', '{$complemento}', '{$referencia}', {$cep}, '{$telefone}', '{$codigo}', '{$funcionarioNome}', '{$dataCadastro}', '{$horaCadastro}')";

            return mysqli_query($this->conexao, $query);
        }

        public function alteraEmpresa(Empresa $empresa) {
            $nome =  mysqli_real_escape_string($this->conexao, $empresa->getNome());
            $cnpj = mysqli_real_escape_string($this->conexao, $empresa->getCnpj());
            $razaoSocial = mysqli_real_escape_string($this->conexao, $empresa->getRazaoSocial());
            $inscricaoEstadual = mysqli_real_escape_string($this->conexao, $empresa->getInscricaoEstadual());
            $inscricaoNumero = mysqli_real_escape_string($this->conexao, $empresa->getInscricaoNumero());
            $email = mysqli_real_escape_string($this->conexao, $empresa->getEmail());
            $endereco = mysqli_real_escape_string($this->conexao, $empresa->getEndereco());
            $numero = mysqli_real_escape_string($this->conexao, $empresa->getNumero());
            $estado = mysqli_real_escape_string($this->conexao, $empresa->getEstado());
            $cidade = mysqli_real_escape_string($this->conexao, $empresa->getCidade());
            $bairro = mysqli_real_escape_string($this->conexao, $empresa->getBairro());
            $complemento = mysqli_real_escape_string($this->conexao, $empresa->getComplemento());
            $referencia = mysqli_real_escape_string($this->conexao, $empresa->getReferencia());
            $cep = mysqli_real_escape_string($this->conexao, $empresa->getCep());
            $telefone = mysqli_real_escape_string($this->conexao, $empresa->getTelefone());
            $tipoEmpresa = mysqli_real_escape_string($this->conexao, $empresa->getTipoEmpresa());

            $query = "UPDATE empresa SET nome = '{$nome}', cnpj = '{$cnpj}', razao_social = '{$razaoSocial}', email = '{$email}', endereco = '{$endereco}', numero = {$numero}, estado = '{$estado}', cidade = '{$cidade}', bairro = '{$bairro}', complemento = '{$complemento}', referencia = '{$referencia}', cep = {$cep}, inscricao_estadual = '{$inscricaoEstadual}', inscricao_numero = '{$inscricaoNumero}', telefone = '{$telefone}', tipo_empresa = '{$tipoEmpresa}' WHERE id = '{$id}'";

            return mysqli_query($this->conexao, $query);
        }

        public function listaEmpresa() {
            $empresas = array();
            $resultado = mysqli_query($this->conexao, "SELECT * FROM empresa");
            while ($empresa_array = mysqli_fetch_assoc($resultado)) {
                $empresa = new Empresa();
                $empresa->setId($empresa_array['id']);
                $empresa->setCodigo($empresa_array['codigo']);
                $empresa->setNome($empresa_array['nome']);
                $empresa->setCnpj($empresa_array['cnpj']);
                $empresa->setTipoEmpresa($empresa_array['tipo_empresa']);
                array_push($empresas, $empresa);
            }
            return $empresas;
        }

        public function removeEmpresa($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "DELETE FROM empresa WHERE id = '{$id}'";
            return mysqli_query($this->conexao, $query);
        }

        public function buscaEmpresa($id) {
            $id = mysqli_real_escape_string($this->conexao, $id);
            $query = "SELECT * FROM empresa WHERE id = '{$id}'";
            $resultado = mysqli_query($this->conexao, $query);
            $empresa_buscada = mysqli_fetch_assoc($resultado);
            $empresa = new Empresa();
            $empresa->setId($empresa_buscada['id']);
            $empresa->setNome($empresa_buscada['nome']);
            $empresa->setCnpj($empresa_buscada['cnpj']);
            $empresa->setRazaoSocial($empresa_buscada['razao_social']);
            $empresa->setInscricaoEstadual($empresa_buscada['inscricao_estadual']);
            $empresa->setInscricaoNumero($empresa_buscada['inscricao_numero']);
            $empresa->setTipoEmpresa($empresa_buscada['tipo_empresa']);
            $empresa->setEmail($empresa_buscada['email']);
            $empresa->setEndereco($empresa_buscada['endereco']);
            $empresa->setNumero($empresa_buscada['numero']);
            $empresa->setEstado($empresa_buscada['estado']);
            $empresa->setCidade($empresa_buscada['cidade']);
            $empresa->setBairro($empresa_buscada['bairro']);
            $empresa->setComplemento($empresa_buscada['complemento']);
            $empresa->setReferencia($empresa_buscada['referencia']);
            $empresa->setCep($empresa_buscada['cep']);
            $empresa->setTelefone($empresa_buscada['telefone']);
            $empresa->setCodigo($empresa_buscada['codigo']);
            $empresa->setFuncionarioNome($empresa_buscada['funcionario_nome']);
            $empresa->setDataCadastro($empresa_buscada['data_cadastro']);
            $empresa->setHoraCadastro($empresa_buscada['hora_cadastro']);
            return $empresa;
        }

        public function buscaCodigo($codigo) {
            $codigo = mysqli_real_escape_string($this->conexao, $codigo);
            $query = "SELECT codigo FROM empresa WHERE codigo = '{$codigo}'";
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
