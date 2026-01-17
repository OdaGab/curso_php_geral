<?php
    // Exemplo de uso da função fopen, fwrite, fclose, fgets, feof em PHP
    // Criando e manipulando um arquivo
    // Nome do arquivo
    
    $nomeArquivo = "exemplo_fopen.txt";

    // Abrindo o arquivo para escrita (cria o arquivo se não existir)
    $arquivo = fopen($nomeArquivo, "w");
    if ($arquivo) {
        // Escrevendo conteúdo no arquivo
        fwrite($arquivo, "Este é um exemplo de uso da função fopen em PHP.\n");
        fwrite($arquivo, "Estamos escrevendo várias linhas de texto.\n");
        fclose($arquivo);
        echo "Arquivo '$nomeArquivo' criado e conteúdo escrito com sucesso.\n";
    } else {
        echo "Erro ao abrir o arquivo '$nomeArquivo' para escrita.\n";
    }

    // Abrindo o arquivo para leitura
    $arquivo = fopen($nomeArquivo, "r");
    if ($arquivo) {
        echo "Conteúdo do arquivo '$nomeArquivo':\n";
        // Lendo o conteúdo do arquivo linha por linha
        while (($linha = fgets($arquivo)) !== false) {
            echo $linha;
        }
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo '$nomeArquivo' para leitura.\n";
    }

    // Exercícios
    // Tente abrir um arquivo inexistente para leitura e veja o que acontece
    // Experimente usar outros modos de abertura, como "a" (append) ou "r+" (leitura e escrita)

    // Incluir exemplos adicionais conforme necessário com feof
    $arquivo = fopen($nomeArquivo, "r");
    if ($arquivo) {
        echo "\nLendo o arquivo usando feof:\n";
        while (!feof($arquivo)) {
            $linha = fgets($arquivo);
            if ($linha !== false) {
                echo $linha;
            }
        }
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo '$nomeArquivo' para leitura com feof.\n";
    }
    // Teste em outros senários     

?>
