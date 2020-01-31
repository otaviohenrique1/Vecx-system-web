<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/ValidaCampos.php");
    require_once("class/Empresa.php");
    require_once("class/EmpresaDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "adiciona-empresa";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Administrador") or ($_SESSION["usuario_cargo"]) != "Gerente") {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: menu.php");
    //     die();
    // } else {
        $url = "formulario-empresa.php";

        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        ValidaCampos::validaCampoInput($nome, 'nome_vazio', "nome", $url);
        
        $cnpj = isset($_POST["cnpj"]) ? Operacoes::formataStringCnpj($_POST["cnpj"]) : "";
        $cnpjTratado = preg_replace('/\.\-\//', "", $cnpj);
        ValidaCampos::validaCampoInput($cnpjTratado, 'cnpj_vazio', "cnpj", $url);

        $razaoSocial = isset($_POST["razao_social"]) ? $_POST["razao_social"] : "Não determinado";
        if (array_key_exists("inscricao_estadual", $_POST)) {
            $inscricaoEstadual = "true";
        } else {
            $inscricaoEstadual = "false";
        }
        $inscricaoNumero = isset($_POST["inscricao_numero"]) ? $_POST["inscricao_numero"] : "Não determinado";

        $tipoEmpresa = isset($_POST["tipo_empresa"]) ? $_POST["tipo_empresa"] : "";
        ValidaCampos::validaCampoSelect($tipoEmpresa, 'tipo_empresa_vazio', "tipo_empresa", $url);

        $email = isset($_POST["email"]) ? $_POST["email"] : "Não determinado";
        $endereco = isset($_POST["endereco"]) ? $_POST["endereco"] : "Não determinado";
        $numero = isset($_POST["numero"]) ? $_POST["numero"] : "0";
        $estado = isset($_POST["estado"]) ? $_POST["estado"] : "Não determinado";
        $cidade = isset($_POST["cidade"]) ? $_POST["cidade"] : "Não determinado";
        $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "Não determinado";
        $complemento = isset($_POST["complemento"]) ? $_POST["complemento"] : "Empresa";
        $referencia = isset($_POST["referencia"]) ? $_POST["referencia"] : "Sem referencia";
        $cep = isset($_POST["cep"]) ? Operacoes::formataStringCep($_POST["cep"]) : "00000-000";

        $telefone = isset($_POST["telefone"]) ? Operacoes::formataStringTelefone($_POST["telefone"]) : "";
        $telefoneTratado = preg_replace('/\(\)\-/', "", $telefone);
        ValidaCampos::validaCampoInput($telefoneTratado, 'telefone_vazio', "telefone", $url);

        $tipoEmpresa = isset($_POST["tipo_empresa"]) ? $_POST["tipo_empresa"] : "Fornecedor";
        $codigo = Operacoes::geraCodigo(10);
        $funcionarioNome = isset($_SESSION["usuario_logado"]) ? $_SESSION["usuario_logado"] : "Admin";
        $dataCadastro = Operacoes::dataAtual();
        $horaCadastro = Operacoes::horaAtual();
        
        $conexao = Conecta::criaConexao();
        $empresa = new Empresa();
        $empresaDao = new EmpresaDao($conexao);

        $empresa->setNome($nome);
        $empresa->setCnpj($cnpj);
        $empresa->setRazaoSocial($razaoSocial);
        $empresa->setInscricaoEstadual($inscricaoEstadual);
        $empresa->setInscricaoNumero($inscricaoNumero);
        $empresa->setTipoEmpresa($tipoEmpresa);
        $empresa->setEmail($email);
        $empresa->setEndereco($endereco);
        $empresa->setNumero($numero);
        $empresa->setEstado($estado);
        $empresa->setCidade($cidade);
        $empresa->setBairro($bairro);
        $empresa->setComplemento($complemento);
        $empresa->setReferencia($referencia);
        $empresa->setCep($cep);
        $empresa->setTelefone($telefone);
        $codigoValidado = $empresaDao->validaCodigo($codigo);    
        $empresa->setCodigo($codigoValidado);
        $empresa->setFuncionarioNome($funcionarioNome);
        $empresa->setDataCadastro($dataCadastro);
        $empresa->setHoraCadastro($horaCadastro);

        if ($empresaDao->insereEmpresa($empresa)) {
            echo "<p class='alert alert-success'>Empresa " . $empresa->getNome() . " cadastrada com sucesso!</p>";
            echo "<a href='formulario-empresa.php' class='btn btn-primary'>Voltar</a>";
        } else {
            $msg = mysqli_error($conexao);
            echo "<p class='alert alert-danger'>Empresa " . $empresa->getNome() . " não foi cadastrada! Erro: " . $msg . "</p>";
            echo "<a href='formulario-empresa.php' class='btn btn-primary'>Voltar</a>";
        }
    // }
    require_once("rodape.php");
