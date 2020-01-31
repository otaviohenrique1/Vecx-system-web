<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Testa Array</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Testa Array</h1>
                <div class="col-md-12">
                    <?php
                        $listaProdutos = array(
                            0 => array(
                                'ID' => '1',
                                'Codigo' => '8464547845',
                                'Nome' => 'Leite Lider 1L',
                                'Quantidade' => '12',
                                'Preço' => '31,2‬0'
                            ),
                            1 => array(
                                'ID' => '2',
                                'Codigo' => '8145468782',
                                'Nome' => 'Leite Quata 1L',
                                'Quantidade' => '12',
                                'Preço' => '31,2‬0'
                            ),
                            2 => array(
                                'ID' => '3',
                                'Codigo' => '8714151211',
                                'Nome' => 'Leite Jussara 1L',
                                'Quantidade' => '12',
                                'Preço' => '31,2‬0'
                            ),
                            3 => array(
                                'ID' => '4',
                                'Codigo' => '8544745523',
                                'Nome' => 'Leite Hercules 1L',
                                'Quantidade' => '12',
                                'Preço' => '31,2‬0'
                            ),
                            4 => array(
                                'ID' => '5',
                                'Codigo' => '8754545222',
                                'Nome' => 'Leite Paulista 1L',
                                'Quantidade' => '12',
                                'Preço' => '31,2‬0'
                            )
                        );
                    ?>
                    <pre>
                        <?php
                            print_r($listaProdutos);
                            echo "<br>";
                            echo "<p>" . implode(",", $listaProdutos) . "</p>";
                            // Link de teste da pagina -> localhost/vecx_system_web/teste/testa_array.php
                        ?>
                    </pre>
                </div>
            </div>
        </div>
        <script src="../js/jquery-3.4.1.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>