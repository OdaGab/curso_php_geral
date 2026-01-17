<?php 

    // Exemplo de manipulação de arquivos
    $nomeDoArquivo = "exemplo.txt"; 
    // Criar e escrever no arquivo
    $arquivo = fopen($nomeDoArquivo, "w");
    if ($arquivo) {
        fwrite($arquivo, "Este é um exemplo de manipulação de arquivos em PHP.\n");
        fwrite($arquivo, "Estamos escrevendo algumas linhas neste arquivo.\n");
        fclose($arquivo);
        echo "Arquivo criado e escrito com sucesso.\n";
    } else {
        echo "Erro ao criar o arquivo.\n";
    }   
    // Ler o conteúdo do arquivo
    $arquivo = fopen($nomeDoArquivo, "r");
    if ($arquivo) {
        echo "Conteúdo do arquivo:\n";
        while (($linha = fgets($arquivo)) !== false) {
            echo $linha;
        }
        fclose($arquivo);
    } else {
        echo "Erro ao abrir o arquivo para leitura.\n";
    }
    // Apagar o arquivo
    if (file_exists($nomeDoArquivo)) {
        unlink($nomeDoArquivo);
        echo "Arquivo apagado com sucesso.\n";
    } else {
        echo "O arquivo não existe.\n";
    }
?>
<?php
    // Exercícios
    // Teste em outros senários
    
    // $nomeDoArquivo2 = "teste.txt";
    
    // Criar e escrever no arquivo
    ?>