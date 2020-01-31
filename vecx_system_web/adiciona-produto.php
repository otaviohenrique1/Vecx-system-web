<?php
    require_once("cabecalho.php");
    require_once("menu-nav-bar.php");
    require_once("class/Conecta.php");
    require_once("class/Operacoes.php");
    require_once("class/ValidaCampos.php");
    require_once("class/Produto.php");
    require_once("class/ProdutoDao.php");
    require_once("class/verifica_sessao.php");
    require_once("class/ValidaAcessoPagina.php");
    require_once("class/OperacoesLogin.php");

    OperacoesLogin::verificaUsuario();
    $paginaVariavel = "adiciona-produto";
    ValidaAcessoPagina::ValidaAcesso($_SESSION["usuario_cargo"], $paginaVariavel);

    // if (($_SESSION["usuario_cargo"] != "Administrador") or (($_SESSION["usuario_cargo"]) != "Gerente") or (($_SESSION["usuario_cargo"]) != "Estoque")) {
    //     $_SESSION["mensagem_acesso_invalido"] = "Você não tem acesso a esta funcionalidade.";
    //     header("Location: menu.php");
    //     die();
    // } else {
        $url = "formulario-produto.php";

        $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
        ValidaCampos::validaCampoInput($nome, 'nome_vazio', "nome", $url);

        $marca = isset($_POST["marca"]) ? $_POST["marca"] : "Não determinado";
        
        $quantidade = isset($_POST["quantidade"]) ? $_POST["quantidade"] : "";
        ValidaCampos::validaCampoInput($quantidade, 'quantidade_vazio', "quantidade", $url);
        
        $garantia = isset($_POST["garantia"]) ? $_POST["garantia"] : "12 meses";
        $descricao = isset($_POST["descricao"]) ? $_POST["descricao"] : "Sem descrição";
        $fornecedorNome = isset($_POST["fornecedor_nome"]) ? $_POST["fornecedor_nome"] : "Não determinado";
        $tipoProduto = isset($_POST["tipo_produto"]) ? $_POST["tipo_produto"] : "Não determinado";
        $lote = isset($_POST["lote"]) ? $_POST["lote"] : "Não determinado";
        $peso = isset($_POST["peso"]) ? $_POST["peso"] : "0";
        $altura = isset($_POST["altura"]) ? $_POST["altura"] : "0";
        $comprimento = isset($_POST["comprimento"]) ? $_POST["comprimento"] : "0";
        $largura = isset($_POST["largura"]) ? $_POST["largura"] : "0";
        $espessura = isset($_POST["espessura"]) ? $_POST["espessura"] : "0";
        $profundidade = isset($_POST["profundidade"]) ? $_POST["profundidade"] : "0";
        $cor = isset($_POST["cor"]) ? $_POST["cor"] : "Não determinado";
        $montagem = isset($_POST["montagem"]) ? $_POST["montagem"] : "Não";
        $aplicacao = isset($_POST["aplicacao"]) ? $_POST["aplicacao"] : "Não determinado";
        $modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : "Não determinado";
        $vidaUtil = isset($_POST["vida_util"]) ? $_POST["vida_util"] : "0";

        $precoCompra = isset($_POST["preco_compra"]) ? $_POST["preco_compra"] : "";
        ValidaCampos::validaCampoInput($precoCompra, 'preco_compra_vazio', "preco_compra", $url);
        
        $precoaVista = isset($_POST["preco_a_vista"]) ? $_POST["preco_a_vista"] : "";
        ValidaCampos::validaCampoInput($precoaVista, 'preco_a_vista_vazio', "preco_a_vista", $url);
        
        $quantidadeComponentes = isset($_POST["quantidade_componentes"]) ? $_POST["quantidade_componentes"] : "1";
        $dataPrimeiraCompra = isset($_POST["data_primeira_compra"]) ? Operacoes::trataData($_POST["data_primeira_compra"]) : Operacoes::dataAtual();
        $dataFabricacao = isset($_POST["data_fabricacao"]) ? Operacoes::trataData($_POST["data_fabricacao"]) : Operacoes::dataAtual();
        $dataValidade = isset($_POST["data_validade"]) ? Operacoes::trataData($_POST["data_validade"]) : Operacoes::dataAtual();
        $codigo = Operacoes::geraCodigo(10);
        
        $codigoBarras = isset($_POST["codigo_barras"]) ? $_POST["codigo_barras"] : "";
        ValidaCampos::validaCampoInput($codigoBarras, 'codigo_barras_vazio', "codigo_barras", $url);
        
        $funcionarioNome = isset($_SESSION["usuario_logado"]) ? $_SESSION["usuario_logado"] : "Admin";
        $dataCadastro = Operacoes::dataAtual();
        $horaCadastro = Operacoes::horaAtual();
        
        $conexao = Conecta::criaConexao();
        $produto = new Produto();
        $produtoDao = new ProdutoDao($conexao);

        $produto->setNome($nome);
        $produto->setMarca($marca);
        $produto->setQuantidade($quantidade);
        $produto->setGarantia($garantia);
        $produto->setDescricao($descricao);
        $produto->setFornecedorNome($fornecedorNome);
        $produto->setTipoProduto($tipoProduto);
        $produto->setLote($lote);
        $produto->setPeso($peso);
        $produto->setAltura($altura);
        $produto->setComprimento($comprimento);
        $produto->setLargura($largura);
        $produto->setEspessura($espessura);
        $produto->setProfundidade($profundidade);
        $produto->setCor($cor);
        $produto->setMontagem($montagem);
        $produto->setAplicacao($aplicacao);
        $produto->setModelo($modelo);
        $produto->setVidaUtil($vidaUtil);
        $produto->setPrecoCompra($precoCompra);
        $produto->setPrecoaVista($precoaVista);
        $produto->setQuantidadeComponentes($quantidadeComponentes);
        $produto->setDataPrimeiraCompra($dataPrimeiraCompra);
        $produto->setDataFabricacao($dataFabricacao);
        $produto->setDataValidade($dataValidade);
        $codigoValidado = $produtoDao->validaCodigo($codigo);
        $produto->setCodigo($codigoValidado);
        $produto->setCodigoBarras($codigoBarras);
        $produto->setFuncionarioNome($funcionarioNome);
        $produto->setDataCadastro($dataCadastro);
        $produto->setHoraCadastro($horaCadastro);

        if ($produtoDao->insereProduto($produto)) {
            echo "<p class='alert alert-success'>Dados do produto " . $produto->getNome() . " foram alterados com sucesso!</p>";
            echo "<a href='formulario-produto.php' class='btn btn-primary'>Voltar</a>";
        } else {
            $msg = mysqli_error($conexao);
            echo "<p class='alert alert-danger'>Dados da produto " . $produto->getNome() . " não foram alterados! Erro: " . $msg . "</p>";
            echo "<a href='formulario-produto.php' class='btn btn-primary'c>Voltar</a>";
        }
    // }
    require_once("rodape.php");
