<?php
    class Operacoes {
        public static function geraCodigo($digitos = 10) {
            $numeroAleatorioArray = array();
            for ($i=1; $i <= $digitos; $i++) { 
                array_push($numeroAleatorioArray, rand(0,9)); //Inicio:0 e Fim:9
            }
            $numeroAleatorio = join("", $numeroAleatorioArray); // Monta uma string com os itens do array
            return $numeroAleatorio;
        }

        public static function dataAtual() {
            date_default_timezone_set('America/Sao_Paulo');
            return date("Y-m-d");
        }

        public static function horaAtual() {
            date_default_timezone_set('America/Sao_Paulo');
            return date("H:i:s");    
        }
        
        public static function trataData($data) {
            date_default_timezone_set('America/Sao_Paulo');
            $novaData = strtotime($data);
            return date("Y-m-d", $novaData);
        }

        public static function formataStringData($texto) {
            // Formato da data -> ##/##/####
            $parte1 = substr($texto, 0, 2);
            $parte2 = substr($texto, 2, 3);
            $parte3 = substr($texto, 4, 4);
            $textoFormatado = $parte1 . "/" . $parte2 . "/" . $parte3;
            return $textoFormatado;
        }

        public static function formataStringRg($texto) {
            // Formato do RG -> ##.###.###-#
            $parte1 = substr($texto, 0, 2);
            $parte2 = substr($texto, 2, 3);
            $parte3 = substr($texto, 5, 3);
            $parte4 = substr($texto, 8, 1);
            $textoFormatado = $parte1 . "." . $parte2 . "." . $parte3 . "-" . $parte4;
            return $textoFormatado;
        }

        public static function formataStringCpf($texto) {
            // Formato do CPF -> ###.###.###-##
            $parte1 = substr($texto, 0, 3);
            $parte2 = substr($texto, 3, 3);
            $parte3 = substr($texto, 6, 3);
            $parte4 = substr($texto, 9, 2);
            $textoFormatado = $parte1 . "." . $parte2 . "." . $parte3 . "-" . $parte4;
            return $textoFormatado;
        }

        public static function formataStringCnpj($texto) {
            // Formato do CNPJ -> ##.###.###/####-##
            $parte1 = substr($texto, 0, 2);
            $parte2 = substr($texto, 2, 3);
            $parte3 = substr($texto, 5, 3);
            $parte4 = substr($texto, 8, 4);
            $parte5 = substr($texto, 12, 2);
            $textoFormatado = $parte1 . "." . $parte2 . "." . $parte3 . "/" . $parte4 . "-" . $parte5;
            return $textoFormatado;
        }

        public static function formataStringTelefone($texto) {
            // Formato do telefone -> (##)####-####
            $parte1 = substr($texto, 0, 2);
            $parte2 = substr($texto, 2, 4);
            $parte3 = substr($texto, 6, 4);
            $textoFormatado = "(" . $parte1 . ")" . $parte2 . "-" . $parte3;
            return $textoFormatado;
        }

        public static function formataStringCelular($texto) {
            // Formato do celular -> (##)#####-####
            $parte1 = substr($texto, 0, 2);
            $parte2 = substr($texto, 2, 5);
            $parte3 = substr($texto, 7, 4);
            $textoFormatado = "(" . $parte1 . ")" . $parte2 . "-" . $parte3;
            return $textoFormatado;
        }
        
        public static function formataStringCep($texto) {
            // Formato do CEP -> #####-###
            $parte1 = substr($texto, 0, 5);
            $parte2 = substr($texto, 5, 3);
            $textoFormatado = $parte1 . "-" . $parte2;
            return $textoFormatado;
        }
    }
    
    // echo Operacoes::GeraCodigo(5);
    // echo rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);