<?php
    // Exemplo mkdir em PHP
    // Criando um diretório
    $diretorio = "novo_diretorio";

    // Cria o diretório se ele não existir
    if (!file_exists($diretorio)) {
        mkdir($diretorio);
        echo "Diretório '$diretorio' criado com sucesso.\n";
    } else {
        echo "Diretório '$diretorio' já existe.\n";
    }
?>  