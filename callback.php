<?php

    //Variável do tipo Callback
    // Em PHP, uma variável do tipo callback é uma referência a uma função que pode ser passada como argumento para outras funções ou métodos.
    // Callbacks são frequentemente usados em funções de manipulação de arrays, eventos ou para definir comportamentos personalizados.      
    // Exemplo de uso de uma variável do tipo Callback
    // Função que será usada como callback
    function saudacao($nome) {
        return "Olá, " . $nome . "!";
    }   
    // Função que recebe um callback como argumento
    function executarCallback($callback, $nome) {
        return $callback($nome); // Executa a função callback com o argumento fornecido
    }   
    // Atribuindo a função 'saudacao' a uma variável do tipo callback
    $meuCallback = 'saudacao';   
    // Usando a variável do tipo callback
    $resultado = executarCallback($meuCallback, "Odair");
    echo $resultado . "\n"; // Exibe: Olá, Odair!
?>