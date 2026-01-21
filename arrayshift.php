<?php

    // arrayshift.php
    // Guia completo da função array_shift() em PHP.

    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_shift()\n";
    echo "==================================================\n\n";

    $frutas = ["maçã", "banana", "laranja"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";

    // --- Exemplo 1: Removendo o Primeiro Elemento ---

    echo "--- Exemplo 1: Removendo o Primeiro Elemento ---\n";
    $primeiraFruta = array_shift($frutas);
    echo "1. Primeira fruta removida: $primeiraFruta\n";
    echo "2. Array após a remoção (array_shift(\\$frutas)):\n";
    print_r($frutas);
    echo "\n\n";

    // --- Exemplo 2: Usando array_shift() com Variáveis ---

    echo "--- Exemplo 2: Usando array_shift() com Variáveis ---\n";
    $vegetais = ["cenoura", "batata", "alface"];
    $primeiroVegetal = array_shift($vegetais);
    echo "3. Primeiro vegetal removido: $primeiroVegetal\n";
    echo "4. Array após a remoção (array_shift(\\$vegetais)):\n";
    print_r($vegetais);
    echo "\n\n";
    // --- Exemplo 3: Removendo de um Array Vazio ---   
    echo "--- Exemplo 3: Removendo de um Array Vazio ---\n";
    $vazio = [];
    $removido = array_shift($vazio);
    echo "5. Tentando remover de um array vazio (array_shift(\\$vazio)):\n";
    echo "   Retorno: $removido\n"; // Deve retornar NULL
    echo "Array após a tentativa de remoção:\n";
    print_r($vazio);
    echo "\n\n";    
    // --- Exemplo 4: Verificando o Número de Elementos Após array_shift() ---
    echo "--- Exemplo 4: Verificando o Número de Elementos Após array_shift() ---\n";
    $numElementos = count($frutas);
    echo "6. Número de elementos no array de frutas após remoção: $numElementos\n\n";    
    // --- Exemplo 5: Removendo Múltiplos Elementos ---
    echo "--- Exemplo 5: Removendo Múltiplos Elementos ---\n";
    $cores = ["vermelho", "verde", "azul", "amarelo"];
    $coresRemovidas = [];
    $coresRemovidas = array_shift($cores, 2); // Remove os dois primeiros elementos
    echo "7. Cores removidas: ";
    print_r($coresRemovidas);
    echo "8. Array após a remoção (array_shift(\\$cores, 2)):\n";
    print_r($cores);
    echo "\n";
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>