<?php
    // Exemplo de remane de arquivos em PHP
    // Renomeando um arquivo
    // Renomeia o arquivo exemplo.txt para arquivo_renomeado.txt
    $arquivo_antigo = "exemplo.txt";
    $arquivo_novo = "arquivo_renomeado.txt";
    if (file_exists($arquivo_antigo)) {
        if (rename($arquivo_antigo, $arquivo_novo)) {
            echo "Arquivo renomeado com sucesso.\n";
        } else {
            echo "Erro ao renomear o arquivo.\n";
        }
    } else {
        echo "Arquivo não encontrado.\n";
    }

    // lembre-se voce estara renomenando o arquivo exemplo.txt para arquivo_renomeado.txt
    // que estavamos utilizando para outros exemplos


?>

