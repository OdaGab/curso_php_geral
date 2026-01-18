<?php
    // Exemplo file exists em PHP
    // Verificando se um arquivo existe
    $arquivo = "exemplo.txt";

    // Verifica se o arquivo existe

    if (file_exists($arquivo)) {

        // Se o arquivo existir, exibe uma mensagem
        echo "O arquivo '$arquivo' existe.\n";
    } else {

        // Se o arquivo não existir, exibe outra mensagem
        echo "O arquivo '$arquivo' não existe.\n";
    }
?>