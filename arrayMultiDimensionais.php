<?php

    // Array Multidimensionais em PHP

    echo "==================================================\n";
    echo "Guia de Arrays Multidimensionais em PHP\n";
    echo "==================================================\n\n";  

    // --- Exemplo 1: Criação de um Array Multidimensional ---

    echo "--- Exemplo 1: Criação de um Array Multidimensional ---\n";
    $pessoas = array(
        array(
            "nome" => "Odair",
            "idade" => 30,
            "cidade" => "São Paulo"
        ),
        array(
            "nome" => "Ana",
            "idade" => 25,
            "cidade" => "Rio de Janeiro"
        ),
        array(
            "nome" => "Bruno",
            "idade" => 28,
            "cidade" => "Belo Horizonte"
        )           
    );
    echo "1. Array Multidimensional de Pessoas:\n";
    print_r($pessoas);
    echo "\n\n";

    // --- Exemplo 2: Acessando Elementos ---

    echo "--- Exemplo 2: Acessando Elementos ---\n";
    echo "2. Nome da segunda pessoa: " . $pessoas[1]["nome"] . "\n";
    echo "   Idade da terceira pessoa: " . $pessoas[2]["idade"] . "\n\n";

    // --- Exemplo 3: Iterando sobre um Array Multidimensional ---

    echo "--- Exemplo 3: Iterando sobre um Array Multidimensional ---\n";
    echo "3. Lista de Pessoas:\n";
    foreach ($pessoas as $pessoa) {
        echo "- Nome: " . $pessoa["nome"] . ", Idade: " . $pessoa["idade"] . ", Cidade: " . $pessoa["cidade"] . "\n";
    }
    echo "\n\n";    

    // --- Exemplo 4: Adicionando um Novo Elemento ---

    echo "--- Exemplo 4: Adicionando um Novo Elemento ---\n";
    $pessoas[] = array(
        "nome" => "Carla",
        "idade" => 27,
        "cidade" => "Curitiba"
    );
    echo "4. Após adicionar Carla:\n";
    print_r($pessoas);
    echo "\n\n";    

    // --- Exemplo 5: Contando Elementos ---

    echo "--- Exemplo 5: Contando Elementos ---\n";
    $contador = count($pessoas);    
    echo "5. Total de Pessoas: " . $contador . "\n\n";  

    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
    
?>