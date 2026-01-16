<?php
    // codigo PHP

    // Variável do tipo Recurso
    // Em PHP, um recurso é uma variável especial que representa uma referência a um recurso externo, como uma conexão de banco de dados, um arquivo aberto ou uma imagem carregada na memória.
    // Recursos são criados por funções específicas e não podem ser manipulados diretamente como outros tipos de variáveis.
    // Exemplo de criação e uso de um recurso de arquivo    
    // Abrindo um arquivo para leitura
    $arquivo = fopen("exemplo.txt", "r"); // fopen retorna um recurso do tipo arquivo
    if ($arquivo) {
        echo "Arquivo aberto com sucesso.\n";

        // Lendo o conteúdo do arquivo linha por linha
        while (($linha = fgets($arquivo)) !== false) {
            echo $linha; // Exibindo cada linha do arquivo
        }

        // Fechando o arquivo após a leitura
        fclose($arquivo);
        echo "\nArquivo fechado.\n";
    } else {
        echo "Erro ao abrir o arquivo.\n";
    }
?>

// Observação:
// Para abrir o arquivo exemplo.txt, certifique-se de que ele exista no mesmo diretório do script PHP ou forneça o caminho correto para o arquivo.