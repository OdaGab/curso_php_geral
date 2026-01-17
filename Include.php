<?php 

    // Codigo de exemplo de include e require
    include 'Include.php'; // Inclui o arquivo uma vez
    require 'Include.php'; // Requer o arquivo, gera erro fatal se não encontrado   
    include_once 'Include.php'; // Inclui o arquivo apenas uma vez
    require_once 'Include.php'; // Requer o arquivo apenas uma vez
?>
<?php
    // Exercícios
    // Teste em outros senários 
    // include 'ArquivoInexistente.php'; // Teste include com arquivo inexistente
    // require 'ArquivoInexistente.php'; // Teste require com arquivo inexistente
    // include_once 'Include.php'; // Teste include_once com arquivo já incluído
    // require_once 'Include.php'; // Teste require_once com arquivo já incluído
?>
<?php 
    // Código de exemplo de manipulação de arquivos
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
    //  Exemplo para fins de demonstração. 

?>
