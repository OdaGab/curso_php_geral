<?php

    // arrayPop.php
    // Guia completo da função array_pop() em PHP.

    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_pop()\n";
    echo "==================================================\n\n";

    $frutas = ["maçã", "banana", "laranja"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";

    // --- Exemplo 1: Removendo o Último Elemento ---

    echo "--- Exemplo 1: Removendo o Último Elemento ---\n";
    $ultimaFruta = array_pop($frutas);
    echo "1. Última fruta removida: $ultimaFruta\n";
    echo "2. Array após a remoção (array_pop(\\$frutas)):\n";
    print_r($frutas);
    echo "\n\n";

    // --- Exemplo 2: Usando array_pop() com Variáveis ---

    echo "--- Exemplo 2: Usando array_pop() com Variáveis ---\n";
    $vegetais = ["cenoura", "batata", "alface"];
    $ultimaVegetal = array_pop($vegetais);
    echo "3. Último vegetal removido: $ultimaVegetal\n";
    echo "4. Array após a remoção (array_pop(\\$vegetais)):\n";
    print_r($vegetais);
    echo "\n\n";

    // --- Exemplo 3: Removendo de um Array Vazio ---

    echo "--- Exemplo 3: Removendo de um Array Vazio ---\n";
    $vazio = [];
    $removido = array_pop($vazio);
    echo "5. Tentando remover de um array vazio (array_pop(\\$vazio)):\n";
    var_dump($removido); // Deve retornar NULL
    echo "Array após a tentativa de remoção:\n";
    print_r($vazio);
    echo "\n\n";

    // --- Exemplo 4: Verificando o Número de Elementos Após array_pop() ---

    echo "--- Exemplo 4: Verificando o Número de Elementos Após array_pop() ---\n";
    $numElementos = count($frutas);
    echo "6. Número de elementos no array de frutas após remoção: $numElementos\n\n";

    // --- Exemplo 5: Removendo Múltiplos Elementos ---
    
    echo "--- Exemplo 5: Removendo Múltiplos Elementos ---\n";
    $cores = ["vermelho", "verde", "azul", "amarelo"];
    $coresRemovidos = array_pop($cores, 2); // Remove os dois últimos elementos
    echo "7. Cores removidas: $coresRemovidos\n";
    echo "8. Array após a remoção (array_pop(\\$cores, 2)):\n";
    print_r($cores);
    echo "\n";
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>