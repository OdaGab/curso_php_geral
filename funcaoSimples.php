<?php 
    // Exemplo de função simples em PHP

    function saudacao($nome) {
        return "Olá, " . $nome . "\nBem-vindo ao PHP.";
    }   


    // Chamar a função e exibir o resultado


    $mensagem = saudacao("Odair Gabriel - primeira função");
    echo $mensagem;
?>