<?php   
    // arrayReverse.php
    // Guia completo da função array_reverse() em PHP.
    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_reverse()\n";
    echo "==================================================\n\n";  
    // --- Exemplo 1: Invertendo um array simples ---
    echo "--- Exemplo 1: Invertendo um array simples ---\n";

    $numeros = [1, 2, 3, 4, 5];
    echo "Array Original:\n";
    print_r($numeros);
    echo "\n";  
    $numerosInverso = array_reverse($numeros);
    echo "Array Inverso:\n";
    print_r($numerosInverso);

    // --- Exemplo 2: Mantendo as chaves originais ---
    echo "\n--- Exemplo 2: Mantendo as chaves originais ---\n";
    $frutas = ["a" => "maçã", "b" => "banana", "c" => "laranja"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";  
    $frutasInverso = array_reverse($frutas, true);
    echo "Array Inverso com chaves mantidas:\n";
    print_r($frutasInverso);    
    // --- Exemplo 3: Invertendo um array multidimensional ---  
    echo "\n--- Exemplo 3: Invertendo um array multidimensional ---\n";
    $pessoas = [
        ["nome" => "João", "idade" => 25],
        ["nome" => "Maria", "idade" => 30],
        ["nome" => "Pedro", "idade" => 35]
    ];
    echo "Array Original:\n";
    print_r($pessoas);
    echo "\n";
    $pessoasInverso = array_reverse($pessoas);
    echo "Array Inverso:\n";
    print_r($pessoasInverso);   
    
?>