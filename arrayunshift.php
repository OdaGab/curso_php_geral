<?php

    // arrayunshift.php
    // Guia completo da função array_unshift() em PHP.

    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_unshift()\n";
    echo "==================================================\n\n";

    $frutas = ["maçã", "banana", "laranja"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";

    // --- Exemplo 1: Adicionando Elementos no Início ---

    echo "--- Exemplo 1: Adicionando Elementos no Início ---\n";
    array_unshift($frutas, "uva", "morango");
    echo "1. Array após adicionar elementos no início (array_unshift(\\$frutas, \"uva\", \"morango\")):\n";
    print_r($frutas);
    echo "\n\n";
    // --- Exemplo 2: Usando array_unshift() com Variáveis ---
    echo "--- Exemplo 2: Usando array_unshift() com Variáveis ---\n";
    $novaFruta1 = "abacaxi";
    $novaFruta2 = "kiwi";
    array_unshift($frutas, $novaFruta1, $novaFruta2);
    echo "2. Array após adicionar variáveis no início (array_unshift(\\$frutas, \\$novaFruta1, \\$novaFruta2)):\n";
    print_r($frutas);
    echo "\n\n";    
    // --- Exemplo 3: Verificando o Número de Elementos Após array_unshift() ---
    echo "--- Exemplo 3: Verificando o Número de Elementos Após array_unshift() ---\n";
    $numElementos = count($frutas);
    echo "3. Número de elementos no array após adições: $numElementos\n\n";    
    // --- Exemplo 4: Adicionando a um Array Vazio ---
    echo "--- Exemplo 4: Adicionando a um Array Vazio ---\n";
    $vegetais = [];
    array_unshift($vegetais, "cenoura", "alface");             
    echo "4. Após adicionar 'cenoura' e 'alface' a um array vazio (array_unshift(\\$vegetais, \"cenoura\", \"alface\")):\n";
    print_r($vegetais);
    echo "\n\n";    
    // --- Exemplo 5: Adicionando Múltiplos Elementos ---
    echo "--- Exemplo 5: Adicionando Múltiplos Elementos ---\n";
    $cores = ["vermelho", "verde"];
    array_unshift($cores, "azul", "amarelo", "roxo");
    echo "5. Array após adicionar múltiplos elementos no início (array_unshift(\\$cores, \"azul\", \"amarelo\", \"roxo\")):\n";
    print_r($cores);
    echo "\n\n";    
    
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>