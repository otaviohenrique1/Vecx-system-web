<?php
    // Exemplo Exception com try e catch
    function inverso($x) {
        if (!$x) {
            throw new Exception("Divisão por zero");
        }
        return 1/$x;
    }

    try {
        echo inverso(5) . "\n";
        echo inverso(0) . "\n";
    } catch (Exception $e) {
        echo 'Exceção capturada: ' . $e->getMessage() . "\n";
    }

    echo "Olá mundo\n";

    // Exemplo Exception com try, catch e finally
    function inverso2($x) {
        if (!$x) {
            throw new Exception("Divisão por zero");
        }
        return 1/$x;
    }

    try {
        echo inverso2(5) . "\n";
    } catch (Exception $e) {
        echo 'Exceção capturada: ' . $e->getMessage() . "\n";
    } finally {
        echo "Primeiro finaly.\n";
    }

    try {
        echo inverso2(0) . "\n";
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } finally {
        echo "Segundo finally.\n";
    }

    echo "Olá mundo\n";
?>
