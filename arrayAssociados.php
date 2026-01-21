<?php 

   // Array associados em PHP
   echo "==================================================\n";
   echo "Guia de Arrays Associativos em PHP\n";
   echo "==================================================\n\n";   
    // --- Exemplo 1: Criação de um Array Associativo ---   
   
    $cores = array(
       "vermelho" => "#FF0000",
       "verde" => "#00FF00",
       "azul" => "#0000FF"
    );
    echo "--- Exemplo 1: Criação de um Array Associativo ---\n";
    echo "1. Array Associativo de Cores:\n";
    print_r($cores);
    echo "\n\n";    
    // --- Exemplo 2: Acessando Valores pelo Nome da Chave ---   
    echo "--- Exemplo 2: Acessando Valores pelo Nome da Chave ---\n";
    echo "2. Código Hexadecimal do Verde: " . $cores["verde"] . "\n\n";    
    // --- Exemplo 3: Adicionando Novos Elementos ---   
    echo "--- Exemplo 3: Adicionando Novos Elementos ---\n";
    $cores["amarelo"] = "#FFFF00"; // Adiciona a cor amarelo
    echo "3. Após adicionar 'amarelo':\n";
    print_r($cores);
    echo "\n\n";    
    // --- Exemplo 4: Iterando sobre um Array Associativo ---   
    echo "--- Exemplo 4: Iterando sobre um Array Associativo ---\n";
    echo "4. Cores e seus Códigos Hexadecimais:\n";
    foreach ($cores as $cor => $hex) {
       echo "- $cor: $hex\n";
    }
    echo "\n";    
    // --- Exemplo 5: Verificando a Existência de uma Chave ---   
    echo "--- Exemplo 5: Verificando a Existência de uma Chave ---\n";
    $chave = "azul";
    if (array_key_exists($chave, $cores)) {
       echo "5. A chave '$chave' existe no array.\n\n";
    } else {
       echo "5. A chave '$chave' não existe no array.\n\n";
    }   
   echo "==================================================\n";
   echo "Fim dos exemplos.\n";
   echo "==================================================\n";
?>