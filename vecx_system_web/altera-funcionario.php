<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/Funcionario.php");
    require_once("class/FuncionarioDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "altera-funcionario";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Administrador") or (($_SESSION["usuario_cargo"]) != "Gerente")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: ficha-funcionario.php");
    //     die();
    // } else {
        $url = "formulario-altera-funcionario.php";

        $id = $_POST["id"];
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        ValidaCampos::validaCampoInput($nome, 'nome_vazio', "nome", $url);

        $sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : false;
        ValidaCampos::validaCampoRadio($sexo, 'sexo_vazio', "sexo", $url);
        
        $dataNascimento = isset($_POST["dataNascimento"]) ? Operacoes::trataData($_POST["dataNascimento"]) : Operacoes::dataAtual();
        $email = isset($_POST["email"]) ? $_POST["email"] : "Não determinado";
        $endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : "Não determinado";
        $numero = isset($_POST["numero"]) ? $_POST["numero"] : "0";
        $estado = isset($_POST["estado"]) ? $_POST["estado"] : "Não determinado";
        $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "Não determinado";
        $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "Não determinado";
        $complemento = (isset($_POST["complemento"])) ? $_POST["complemento"] : "Casa";
        $referencia = (isset($_POST["referencia"])) ? $_POST["referencia"] : "Sem referencia";
        $cep = isset($_POST["cep"]) ? Operacoes::formataStringCep($_POST["cep"]) : "00000-000";

        $cpf = isset($_POST["cpf"]) ? Operacoes::formataStringCpf($_POST["cpf"]) : "";
        $cpfTratado = str_replace('/\.\-/', "", $cpf);
        ValidaCampos::validaCampoInput($cpfTratado, 'cpf_vazio', "cpf", $url);

        $rg = isset($_POST["rg"]) ? Operacoes::formataStringRg($_POST["rg"]) : "";
        $rgTratado = preg_replace('/\.\-/', "", $rg);
        ValidaCampos::validaCampoInput($rgTratado, 'rg_vazio', "rg", $url);
        
        $telefone = isset($_POST["telefone"]) ? Operacoes::formataStringTelefone($_POST["telefone"]) : "";
        $telefoneTratado = str_replace('/\(\)\-/', "", $telefone);
        ValidaCampos::validaCampoInput($telefoneTratado, 'telefone_vazio', "telefone", $url);
        
        $celular = isset($_POST["celular"]) ? Operacoes::formataStringCelular($_POST["celular"]) : "";
        $celularTratado = str_replace('/\(\)\-/', "", $celular);
        ValidaCampos::validaCampoInput($celularTratado, 'celular_vazio', "celular", $url);
        
        $cargo = isset($_POST["cargo"]) ? $_POST["cargo"] : "";
        ValidaCampos::validaCampoSelect($cargo, 'cargo_vazio', "cargo", $url);
        
        $login = isset($_POST["login"]) ? $_POST["login"] : "";
        ValidaCampos::validaCampoInput($usuario, 'usuario_vazio', "usuario", $url);
        
        $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
        ValidaCampos::validaCampoInput($senha, 'senha_vazio', "senha", $url);
        
        $carteiraTrabalho = isset($_POST["carteira_trabalho"]) ? $_POST["carteira_trabalho"] : "";
        ValidaCampos::validaCampoInput($carteiraTrabalho, 'carteira_trabalho_vazio', "carteira_trabalho", $url);
        
        $salario = isset($_POST["salario"]) ? $_POST["salario"] : "";
        ValidaCampos::validaCampoInput($salario, 'salario_vazio', "salario", $url);
        
        $funcionario = new Funcionario();
        $conexao = Conecta::criaConexao();
        $funcionarioDao = new FuncionarioDao($conexao);
        
        $funcionario->setId($id);
        $funcionario->setNome($nome);
        $funcionario->setCpf($cpf);
        $funcionario->setRg($rg);
        $funcionario->setSexo($sexo);
        $funcionario->setDataNascimento($dataNascimento);
        $funcionario->setEmail($email);
        $funcionario->setEndereco($endereco);
        $funcionario->setNumero($numero);
        $funcionario->setEstado($estado);
        $funcionario->setCidade($cidade);
        $funcionario->setBairro($bairro);
        $funcionario->setComplemento($complemento);
        $funcionario->setReferencia($referencia);
        $funcionario->setCep($cep);
        $funcionario->setTelefone($telefone);
        $funcionario->setCelular($celular);
        $funcionario->setCargo($cargo);
        $funcionario->setLogin($login);
        $funcionario->setSenha($senha);
        $funcionario->setCarteiraTrabalho($carteiraTrabalho);
        $funcionario->setSalario($salario);

        if ($funcionarioDao->alteraFuncionario($funcionario)) {
            echo "<p class='alert alert-success'>Dados do funcionario " . $funcionario->getNome() . " foram alterados com sucesso!</p>";
            echo "<a href='lista-funcionario.php' class='btn btn-primary'>Voltar</a>";
        } else {
            $msg = mysqli_error($conexao);
            echo "<p class='alert alert-danger'>Dados da funcionario " . $funcionario->getNome() . " não foram alterados! Erro: " . $msg . "</p>";
            echo "<a href='lista-funcionario.php' class='btn btn-primary'c>Voltar</a>";
        }
    // }
    require_once("rodape.php");
