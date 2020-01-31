<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/ValidaCampos.php");
    require_once("class/Cliente.php");
    require_once("class/ClienteDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "altera-cliente";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Administrador") or (($_SESSION["usuario_cargo"]) != "Gerente") or (($_SESSION["usuario_cargo"]) != "Atendente")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: ficha-cliente.php");
    //     die();
    // } else {
        $url = "formulario-altera-cliente.php";

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
        $complemento = isset($_POST["complemento"]) ? $_POST["complemento"] : "Casa";
        $referencia = isset($_POST["referencia"]) ? $_POST["referencia"] : "Sem referencia";
        $cep = isset($_POST["cep"]) ? Operacoes::formataStringCep($_POST["cep"]) : "00000-000";

        $cpf = isset($_POST["cpf"]) ? Operacoes::formataStringCpf($_POST["cpf"]) : "";
        $cpfTratado = str_replace('/\.\-/', "", $cpf);
        ValidaCampos::validaCampoInput($cpfTratado, 'cpf_vazio', "cpf", $url);

        $rg = isset($_POST["rg"]) ? Operacoes::formataStringRg($_POST["rg"]) : "";
        $rgTratado = str_replace('/\.\-/', "", $rg);
        ValidaCampos::validaCampoInput($rgTratado, 'rg_vazio', "rg", $url);

        $telefone = isset($_POST["telefone"]) ? Operacoes::formataStringTelefone($_POST["telefone"]) : "";
        $telefoneTratado = str_replace('/\(\)\-/', "", $telefone);
        ValidaCampos::validaCampoInput($telefoneTratado, 'telefone_vazio', "telefone", $url);
        
        $celular = isset($_POST["celular"]) ? Operacoes::formataStringCelular($_POST["celular"]) : "";
        $celularTratado = str_replace('/\(\)\-/', "", $celular);
        ValidaCampos::validaCampoInput($celularTratado, 'celular_vazio', "celular", $url);
        
        $cliente = new Cliente();
        $conexao = Conecta::criaConexao();
        $clienteDao = new ClienteDao($conexao);

        $cliente->setId($id);
        $cliente->setNome($nome);
        $cliente->setCpf($cpf);
        $cliente->setRg($rg);
        $cliente->setSexo($sexo);
        $cliente->setDataNascimento($dataNascimento);
        $cliente->setEmail($email);
        $cliente->setEndereco($endereco);
        $cliente->setNumero($numero);
        $cliente->setEstado($estado);
        $cliente->setCidade($cidade);
        $cliente->setBairro($bairro);
        $cliente->setComplemento($complemento);
        $cliente->setReferencia($referencia);
        $cliente->setCep($cep);
        $cliente->setTelefone($telefone);
        $cliente->setCelular($celular);

        if ($clienteDao->alteraCliente($cliente)) {
            echo "<p class='alert alert-success'>Dados do cliente " . $cliente->getNome() . " foram alterados com sucesso!</p>";
            echo "<a href='lista-cliente.php' class='btn btn-primary'>Voltar</a>";
        } else {
            $msg = mysqli_error($conexao);
            echo "<p class='alert alert-danger'>Dados da cliente " . $cliente->getNome() . " não foram alterados! Erro: " . $msg . "</p>";
            echo "<a href='lista-cliente.php' class='btn btn-primary'c>Voltar</a>";
        }
    // }
    require_once("rodape.php");
