<?php
// Examplo usando o comando file 
// para ler o conteudo de um arquivo
$dados = file("exemplo.txt");

// Exibindo o conteudo do arquivo linha por linha
// A funcao file() retorna um array
// onde cada elemento e uma linha do arquivo

    echo $dados[0];
    echo $dados[1];
?>



