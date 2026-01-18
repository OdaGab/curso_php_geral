<?php
    // Exemplo getcwd em PHP
    // Obtendo o diretório de trabalho atual
    $diretorio_atual = getcwd();
    
    if ($diretorio_atual !== false) {
        echo "O diretório de trabalho atual é: $diretorio_atual\n";
    } else {
        echo "Erro ao obter o diretório atual.\n";
    }
?>