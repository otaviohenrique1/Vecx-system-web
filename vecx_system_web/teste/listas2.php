<?php
    $estado = array(
        "Selecione" => "Selecione",
        "AC" => "Acre",
        "AL" => "Alagoas",
        "AP" => "Amapá",
        "AM" => "Amazonas",
        "BA" => "Bahia",
        "CE" => "Ceará",
        "DF" => "Distrito Federal",
        "ES" => "Espírito Santo",
        "GO" => "Goiás",
        "MA" => "Maranhão",
        "MT" => "Mato Grosso",
        "MS" => "Mato Grosso do Sul",
        "MG" => "Minas Gerais",
        "PA" => "Pará",
        "PB" => "Paraíba",
        "PR" => "Paraná",
        "PE" => "Pernambuco",
        "PI" => "Piauí",
        "RJ" => "Rio de Janeiro",
        "RN" => "Rio Grande do Norte",
        "RS" => "Rio Grande do Sul",
        "RO" => "Rondônia",
        "RR" => "Roraima",
        "SC" => "Santa Catarina",
        "SP" => "São Paulo",
        "SE" => "Sergipe",
        "TO" => "Tocantins"
    );
    
    $tipoEmpresa = array(
        "selecione" => "Selecione",
        "fornecedor" => "Fornecedor",
        "cliente" => "Cliente",
        "servico" => "Serviço"
    );

    $cargo = array(
        "Selecione" => "Selecione",
        "Gerente" => "Gerente",
        "Administrador" => "Administrador",
        "Atendente" => "Atendente",
        "Estoque" => "Estoque",
        "Carregador" => "Carregador"
    );
?>
<select name="cargo" id="c_cargo" class="form-control">
    <?php foreach($estado as $k => $c) { ?>
        <option value="<?= $k; ?>"><?= $c; ?></option>
    <?php } ?>
</select>
<br>
<select name="cargo" id="c_cargo" class="form-control">
    <?php foreach($tipoEmpresa as $k => $c) { ?>
        <option value="<?= $k; ?>"><?= $c; ?></option>
    <?php } ?>
</select>
<br>
<select name="cargo" id="c_cargo" class="form-control">
    <?php foreach($cargo as $k => $c) { ?>
        <option value="<?= $k; ?>"><?= $c; ?></option>
    <?php } ?>
</select>
<br>
<?php
    class ExibeLista {
        public static function mostraLista() {
			$cargo2 = array(
                "Selecione" => "Selecione",
                "Gerente" => "Gerente",
                "Administrador" => "Administrador",
                "Atendente" => "Atendente",
                "Estoque" => "Estoque",
                "Carregador" => "Carregador"
            );
            return $cargo2;
        }
    }
    
    $cargo2 = ExibeLista::mostraLista();
?>
<select name="cargo" id="c_cargo" class="form-control">
    <?php foreach($cargo2 as $k => $c) { ?>
        <option value="<?= $k; ?>"><?= $c; ?></option>
    <?php } ?>
</select>