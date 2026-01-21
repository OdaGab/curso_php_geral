<?php
    // arrayKeys.php
    // Guia completo da função array_keys() em PHP.
    echo "==================================================\n";
    echo "Guia de Exemplos da Função array_keys()\n";
    echo "==================================================\n\n";

    // --- Exemplo 1: Obtendo chaves de um array simples ---
    echo "--- Exemplo 1: Obtendo chaves de um array simples ---\n";

    $numeros = [10, 20, 30, 40, 50];
    echo "Array Original:\n";
    print_r($numeros);
    echo "\n";
    $chaves = array_keys($numeros);
    echo "Chaves do Array:\n";
    print_r($chaves);

    // --- Exemplo 2: Obtendo chaves com base em um valor ---
    echo "\n--- Exemplo 2: Obtendo chaves com base em um valor ---\n";
    $frutas = ["a" => "maçã", "b" => "banana", "c" => "laranja"];
    echo "Array Original:\n";
    print_r($frutas);
    echo "\n";
    $chavesComValor = array_keys($frutas, "banana");
    echo "Chaves com valor 'banana':\n";
    print_r($chavesComValor);
    // --- Exemplo 3: Usando array_keys() com arrays multidimensionais ---
    echo "\n--- Exemplo 3: Usando array_keys() com arrays multidimensionais ---\n";
    $pessoas = [
        ["nome" => "João", "idade" => 25],
        ["nome" => "Maria", "idade" => 30],
        ["nome" => "Pedro", "idade" => 35]
    ];
    echo "Array Original:\n";
    print_r($pessoas);
    echo "\n";
    $chavesNomes = array_keys($pessoas[0]);
    echo "Chaves do primeiro elemento (pessoa):\n";
    print_r($chavesNomes);   
    // --- Exemplo 4: Obtendo chaves de um array vazio ---
    echo "\n--- Exemplo 4: Obtendo chaves de um array vazio ---\n";
    $vazio = [];
    echo "Array Original (vazio):\n";
    print_r($vazio);
    echo "\n";
    $chavesVazio = array_keys($vazio);
    echo "Chaves do Array Vazio:\n";
    print_r($chavesVazio);   
    // --- Exemplo 5: Obtendo chaves de um array associativo ---    
    echo "\n--- Exemplo 5: Obtendo chaves de um array associativo ---\n";
    $dados = [
        "nome" => "Ana",
        "idade" => 28,
        "cidade" => "São Paulo"
    ];
    echo "Array Original:\n";
    print_r($dados);
    echo "\n";
    $chavesAssociativo = array_keys($dados);
    echo "Chaves do Array Associativo:\n";
    print_r($chavesAssociativo);   
    echo "\n==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>