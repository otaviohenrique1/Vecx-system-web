<?php
    class Listas {
        public static function listaEstadosBrasil() {
            return array(
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
        }

        public static function listaTipoEmpresa() {
            return array(
                "selecione" => "Selecione",
                "fornecedor" => "Fornecedor",
                "cliente" => "Cliente",
                "servico" => "Serviço"
            );
        }

        public static function listaCargo() {
            return array(
                "Selecione" => "Selecione",
                "Gerente" => "Gerente",
                "Administrador" => "Administrador",
                "Atendente" => "Atendente",
                "Estoque" => "Estoque",
                "Carregador" => "Carregador"
            );
        }
    }
?>