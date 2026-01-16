<?php
    // codigo PHP

    //maneira de declarar variaveis em PHP

    // Tipos de variáveis

    // String
    // Integer
    // Float
    // Boolean
    // Array
    
    // vamos aprofundar em cada tipo de variável conforme andamento do curso 

    // Como declarar variáveis em PHP
    // Todas as variáveis em PHP começam com o símbolo $
    // O nome da variável deve começar com uma letra ou um sublinhado (_)
    // O nome da variável não pode conter espaços e caracteres especiais
    // O PHP é uma linguagem de tipagem dinâmica, então você não precisa declarar o tipo da variável explicitamente
    // O PHP determina o tipo da variável com base no valor atribuído a ela 
    // Exemplo de declaração de variáveis em PHP
    // Declaração de uma variável string
    // Declaração de uma variável integer
    // Declaração de uma variável float
    // Declaração de uma variável boolean
    // Declaração de uma variável array 
    // Atribuição de valores às variáveis

    $nome = "Odair";
    $idade = 30;
    $altura = 1.75;
    $isEstudante = true;
    $notas = array(8.5, 9.0, 7.5);

    // Exibindo as variáveis de forma legível e simples

    // Exibindo o valor das variáveis usando comando de saída
    // Exemplo completo

    echo "Nome: " . $nome . "\n";
    echo "Idade: " . $idade . "\n";
    echo "Altura: " . $altura . "m\n";
    echo "É estudante? " . ($isEstudante ? "Sim" : "Não") . "\n";
    echo "Notas: " . implode(", ", $notas) . "\n";  


?>