<?php
    // Exemplo is_file em PHP
    // Verificando se um arquivo é realmente um arquivo (e não um diretório)
    $arquivo = "exemplo.txt";

    // Verifica se o caminho aponta para um arquivo
    if (is_file($arquivo)) {
        echo "O caminho '$arquivo' aponta para um arquivo.\n";
    } else {
        echo "O caminho '$arquivo' não aponta para um arquivo.\n";
    }
?>  