<?php   

    // array manipulation.php
    // Guia completo de manipulação de arrays em PHP.
    echo "==================================================\n";
    echo "Guia de Manipulação de Arrays em PHP\n";
    echo "==================================================\n\n";  
    // --- Exemplo 1: Criação de um Array ---

    echo "--- Exemplo 1: Criação de um Array ---\n";
    $frutas = array("Maçã", "Banana", "Laranja");
    echo "1. Array de Frutas: ";        
    print_r($frutas);
    echo "\n\n";

    // --- Exemplo 2: Adicionando Elementos ---

    echo "--- Exemplo 2: Adicionando Elementos ---\n";
    $frutas[] = "Uva"; // Adiciona 'Uva' ao final do array
    echo "2. Após adicionar 'Uva': ";
    print_r($frutas);
    echo "\n\n";
    
    // --- Exemplo 3: Removendo Elementos ---
    echo "--- Exemplo 3: Removendo Elementos ---\n";
    unset($frutas[1]); // Remove 'Banana'
    echo "3. Após remover o segundo elemento (Banana): ";
    print_r($frutas);
    echo "\n\n";
    // --- Exemplo 4: Iterando sobre um Array ---
    echo "--- Exemplo 4: Iterando sobre um Array ---\n";
    echo "4. Elementos do Array de Frutas:\n";
    foreach ($frutas as $fruta) {
        echo "- $fruta\n";
    }
    echo "\n";
    // --- Exemplo 5: Contando Elementos ---
    echo "--- Exemplo 5: Contando Elementos ---\n";
    $contador = count($frutas);
    echo "5. Número de frutas no array: $contador\n\n";
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>