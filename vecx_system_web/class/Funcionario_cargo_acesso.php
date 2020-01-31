<?php
    class Funcionario_cargo_acesso {
        // Array de permissoes de acesso dos usuarios 
        public static function AdministradorAcessoPaginas() {
            return array(1 => "formulario-cliente", 2 => "formulario-empresa", 3 => "formulario-funcionario", 4 => "formulario-produto", 5 => "formulario-altera-cliente", 6 => "formulario-altera-empresa", 7 => "formulario-altera-funcionario", 8 => "formulario-altera-produto", 9 => "lista-cliente", 10 => "lista-empresa", 11 => "lista-funcionario", 12 => "lista-produto", 13 => "ficha-cliente", 14 => "ficha-empresa", 15 => "ficha-funcionario", 16 => "ficha-produto", 17 => "ferramentas", 18 => "sobre", 19 => "adiciona-cliente", 20 => "adiciona-empresa", 21 => "adiciona-funcionario", 22 => "adiciona-produto", 23 => "altera-cliente", 24 => "altera-empresa", 25 => "altera-estoque", 26 => "altera-funcionario", 27 => "altera-produto", 28 => "remove-cliente", 29 => "remove-empresa", 30 => "remove-funcionario", 31 => "remove-produto");
        }

        public static function GerenteAcessoPaginas() {
            return array(1 => "formulario-cliente", 2 => "formulario-empresa", 3 => "formulario-funcionario", 4 => "formulario-produto", 5 => "formulario-altera-cliente", 6 => "formulario-altera-empresa", 7 => "formulario-altera-funcionario", 8 => "formulario-altera-produto", 9 => "lista-cliente", 10 => "lista-empresa", 11 => "lista-funcionario", 12 => "lista-produto", 13 => "ficha-cliente", 14 => "ficha-empresa", 15 => "ficha-funcionario", 16 => "ficha-produto", 17 => "sobre", 18 => "adiciona-cliente", 19 => "adiciona-empresa", 20 => "adiciona-funcionario", 21 => "adiciona-produto", 22 => "altera-cliente", 23 => "altera-empresa", 24 => "altera-estoque", 25 => "altera-funcionario", 26 => "altera-produto", 27 => "remove-cliente", 28 => "remove-empresa", 29 => "remove-funcionario", 30 => "remove-produto");
        }

        public static function AtendenteAcessoPaginas() {
            return array(1 => "formulario-cliente", 2 => "formulario-altera-cliente", 3 => "lista-cliente", 4 => "lista-produto", 5 => "ficha-cliente", 6 => "ficha-produto", 7 => "sobre", 8 => "adiciona-cliente", 9 => "altera-cliente");
        }

        public static function EstoqueAcessoPaginas() {
            return array(1 => "formulario-produto", 2 => "formulario-altera-produto", 3 => "lista-produto", 4 => "ficha-produto", 5 => "sobre", 6 => "adiciona-produto", 7 => "altera-estoque", 8 => "altera-produto", 9 => "remove-produto");
        }

        public static function CarregadorAcessoPaginas() {
            return array(1 => "lista-cliente", 2 => "lista-produto", 3 => "ficha-cliente", 4 => "ficha-produto", 5 => "sobre");
        }

        public static function PaginasSistema() {
            return array(1 => "formulario-cliente", 2 => "formulario-empresa", 3 => "formulario-funcionario", 4 => "formulario-produto", 5 => "formulario-altera-cliente", 6 => "formulario-altera-empresa", 7 => "formulario-altera-funcionario", 8 => "formulario-altera-produto", 9 => "lista-cliente", 10 => "lista-empresa", 11 => "lista-funcionario", 12 => "lista-produto", 13 => "ficha-cliente", 14 => "ficha-empresa", 15 => "ficha-funcionario", 16 => "ficha-produto", 17 => "ferramentas", 18 => "sobre", 19 => "adiciona-cliente", 20 => "adiciona-empresa", 21 => "adiciona-funcionario", 22 => "adiciona-produto", 23 => "altera-cliente", 24 => "altera-empresa", 25 => "altera-estoque", 26 => "altera-funcionario", 27 => "altera-produto", 28 => "remove-cliente", 29 => "remove-empresa", 30 => "remove-funcionario", 31 => "remove-produto");
        }
    }
    
    // Teste da classe
    // $gerenteAcessoPaginas = Funcionario_cargo_acesso::GerenteAcessoPaginas();
    // $administradorAcessoPaginas = Funcionario_cargo_acesso::AdministradorAcessoPaginas();
    // $atendenteAcessoPaginas = Funcionario_cargo_acesso::AtendenteAcessoPaginas();
    // $estoqueAcessoPaginas = Funcionario_cargo_acesso::EstoqueAcessoPaginas();
    // $carregadorAcessoPaginas = Funcionario_cargo_acesso::CarregadorAcessoPaginas();
    // echo "<p>". (in_array("lista-cliente", $gerenteAcessoPaginas)) ? "Existe no array" : "Não existe no array" . "</p>";
    // echo "<br>";
    // echo "<p>". (array_key_exists(1, $gerenteAcessoPaginas)) ? "Existe no array" : "Não existe no array" . "</p>";
    // echo "<br>";
    // echo "<p>". (array_key_exists("lista-cliente", $gerenteAcessoPaginas)) ? "Existe no array" : "Não existe no array" . "</p>";
