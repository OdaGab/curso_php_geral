<?php   
    // Exemplo de manipulação de arquivos e diretórios em PHP

    // Criando um diretório
    $diretorio = "meu_diretorio";
    if (!is_dir($diretorio)) {
        mkdir($diretorio);
        echo "Diretório '$diretorio' criado com sucesso.\n";
    } else {
        echo "O diretório '$diretorio' já existe.\n";
    }

    // Criando um arquivo dentro do diretório
    $arquivo = $diretorio . "/meu_arquivo.txt";
    file_put_contents($arquivo, "Conteúdo do arquivo.\n");
    echo "Arquivo '$arquivo' criado com sucesso.\n";

    // Lendo o conteúdo do arquivo
    $conteudo = file_get_contents($arquivo);
    echo "Conteúdo do arquivo:\n" . $conteudo;

    // Exercícios
    // Crie outras funções para manipular arquivos e diretórios, como renomear, mover ou excluir arquivos

    // Renomeando o arquivo
    $novoNomeArquivo = $diretorio . "/meu_arquivo_renomeado.txt";
    rename($arquivo, $novoNomeArquivo);
    echo "Arquivo renomeado para '$novoNomeArquivo'.\n";

    // Movendo o arquivo para outro diretório
    $novoDiretorio = "outro_diretorio";
    if (!is_dir($novoDiretorio)) {
        mkdir($novoDiretorio);
        echo "Diretório '$novoDiretorio' criado com sucesso.\n";
    }
    $novoCaminhoArquivo = $novoDiretorio . "/meu_arquivo_renomeado.txt";
    rename($novoNomeArquivo, $novoCaminhoArquivo);
    echo "Arquivo movido para '$novoCaminhoArquivo'.\n";

    // Excluindo o arquivo
    unlink($novoCaminhoArquivo);
    echo "Arquivo '$novoCaminhoArquivo' excluído com sucesso.\n";

    // Teste em outros senários
?>
