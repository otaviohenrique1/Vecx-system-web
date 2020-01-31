<?php
    require_once("cabecalho.php");
    require_once("class/Mensagem.php");
    require_once("class/verifica_sessao.php");
    // require_once("menu-nav-bar.php");
    // require_once("class/ValidaAcessoPagina.php");
    // require_once("class/OperacoesLogin.php");

    // OperacoesLogin::verificaUsuario();
    // Link de teste da pagina -> http://localhost/vecx_system_web/vendas.php
?>
<h1>Vendas</h1>
<div class="col-md-12 row">
    <input type="text" name="codigo" id="c_codigo" class="col-md-3" placeholder="Codigo">
    <p class="col-md-1" style="text-align: center;"></p>
    <input type="number" name="quantidade" id="c_quantidade" class="col-md-2" placeholder="Quantidade">
    <p id="vezes" class="col-md-1" style="text-align: center;">X</p>
    <input type="number" name="preco" id="c_preco" class="col-md-2" placeholder="Preço">
    <p id="igual" class="col-md-1" style="text-align: center;">=</p>
    <input type="number" name="preco_total" id="c_preco_total" class="col-md-2" placeholder="Total">
    <!-- <div class="col-md-3">
        <input type="text" name="codigo" id="c_codigo" placeholder="Codigo">
    </div>
    <div class="col-md-9 row">
        <input type="number" name="quantidade" id="c_quantidade" class="col-md-3" placeholder="Quantidade">
        <p id="vezes" class="col-md-1">X</p>
        <input type="number" name="preco" id="c_preco" class="col-md-3" placeholder="Preço">
        <p id="igual" class="col-md-1">=</p>
        <input type="number" name="preco_total" id="c_preco_total" class="col-md-4" placeholder="Total">
    </div> -->
</div>
<div class="col-md-12">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço(R$)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>8464547845</td>
                <td>Leite Lider 1L</td>
                <td>12</td>
                <td>31,2‬0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>8145468782</td>
                <td>Leite Quata 1L</td>
                <td>12</td>
                <td>31,2‬0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>8714151211</td>
                <td>Leite Jussara 1L</td>
                <td>12</td>
                <td>31,2‬0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>8544745523</td>
                <td>Leite Hercules 1L</td>
                <td>12</td>
                <td>31,2‬0</td>
            </tr>
            <tr>
                <td>5</td>
                <td>8754545222</td>
                <td>Leite Paulista 1L</td>
                <td>12</td>
                <td>31,2‬0</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align: left;">Total (R$):</td>
                <td colspan="2" style="text-align: right;">156,00</td>
            </tr>
        </tfoot>
    </table>
</div>
<?php require_once("rodape.php"); ?>