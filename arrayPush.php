<?php 

     // arrayPush.php
    // Guia completo da função array_push() em PHP.

    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_push()\n";
    echo "==================================================\n\n";
    $frutas = ["maçã", "banana"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";  

    // --- Exemplo 1: Adicionando um Elemento ---

    echo "--- Exemplo 1: Adicionando um Elemento ---\n";
    array_push($frutas, "laranja");
    echo "1. Após adicionar 'laranja' (array_push(\\$frutas, 'laranja')):\n";
    print_r($frutas);
    echo "\n\n";  

    // --- Exemplo 2: Adicionando Múltiplos Elementos ---

    echo "--- Exemplo 2: Adicionando Múltiplos Elementos ---\n";
    array_push($frutas, "uva", "abacate");  
    echo "2. Após adicionar 'uva' e 'abacate' (array_push(\\$frutas, 'uva', 'abacate')):\n";
    print_r($frutas);
    echo "\n\n";  

    // --- Exemplo 3: Usando array_push() com Variáveis ---

    echo "--- Exemplo 3: Usando array_push() com Variáveis ---\n";
    $novaFruta1 = "manga";
    $novaFruta2 = "kiwi";
    array_push($frutas, $novaFruta1, $novaFruta2);
    echo "3. Após adicionar 'manga' e 'kiwi' (array_push(\\$frutas, \\$novaFruta1, \\$novaFruta2)):\n";
    print_r($frutas);
    echo "\n\n";  

    // --- Exemplo 4: Verificando o Número de Elementos Após array_push() ---

    echo "--- Exemplo 4: Verificando o Número de Elementos Após array_push() ---\n";
    $numElementos = count($frutas);
    echo "4. Número de elementos no array após adições: $numElementos\n\n";  
    
    // --- Exemplo 5: Adicionando Elementos a um Array Vazio ---

    echo "--- Exemplo 5: Adicionando Elementos a um Array Vazio ---\n";
    $vegetais = [];
    array_push($vegetais, "cenoura", "batata");             
    echo "5. Após adicionar 'cenoura' e 'batata' a um array vazio (array_push(\\$vegetais, 'cenoura', 'batata')):\n";
    print_r($vegetais);
    echo "\n";  
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>


