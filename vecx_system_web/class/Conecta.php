<?php
    class Conecta {
        public static function criaConexao() {
            // define('DB_HOSTNAME', 'localhost');
            // define('DB_DATABASE', 'vecxsystembd');
            // define('DB_USERNAME', 'root');
            // define('DB_PASSWORD', '');
            // $conexao = mysqli_connect(DB_HOSTNAME, DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            $conexao = mysqli_connect('localhost', 'root', '', 'vecxsystembd');
            return $conexao;
        }
        // $conexao = mysqli_connect('localhost', 'root', '', 'vecxsystembd');
    }
