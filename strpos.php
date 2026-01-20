<?php

    // strpos.php
    // Guia completo da Função strpos() em PHP.
    echo "==================================================\n";
    echo "Guia de Exemplos da Função strpos()\n";           
    echo "==================================================\n\n";
    $texto = "Odair Gabriel da Silva";
    echo "Texto Original: \"$texto\"\n\n";
    // --- Exemplo 1: Busca Básica ---
    // Encontra a posição da primeira ocorrência de 'Gabriel'.
    echo "--- Exemplo 1: Busca Básica ---\n";
    $posicao = strpos($texto, "Gabriel");
    echo "1. Posição de 'Gabriel' (strpos(\\$texto, 'Gabriel')): $posicao\n\n";
    // --- Exemplo 2: Busca com Offset ---
    // Encontra a posição da primeira ocorrência de 'a' começando a busca a partir do índice 5.
    echo "--- Exemplo 2: Busca com Offset ---\n";
    $posicao = strpos($texto, "a", 5);
    echo "2. Posição de 'a' a partir do índice 5 (strpos(\\$texto, 'a', 5)): $posicao\n\n";
    // --- Exemplo 3: Substring Não Encontrada ---
    // Tenta encontrar a posição de 'xyz' que não existe na string.
    echo "--- Exemplo 3: Substring Não Encontrada ---\n";
    $posicao = strpos($texto, "xyz");
    if ($posicao === false) {
        echo "3. 'xyz' não encontrado (strpos(\\$texto, 'xyz')): Substring não encontrada.\n\n";
    } else {
        echo "3. Posição de 'xyz' (strpos(\\$texto, 'xyz')): $posicao\n\n";
    }   
    // --- Exemplo 4: Busca Sensível a Maiúsculas/Minúsculas ---
    // Tenta encontrar 'gabriel' que difere em maiúsculas/minúsculas.
    echo "--- Exemplo 4: Busca Sensível a Maiúsculas/Minúsculas ---\n";
    $posicao = strpos($texto, "gabriel");
    if ($posicao === false) {
        echo "4. 'gabriel' não encontrado (strpos(\\$texto, '       
gabriel')): Substring não encontrada.\n\n";
    } else {
        echo "4. Posição de 'gabriel' (strpos(\\$texto, 'gabriel')): $posicao\n\n";
    }
    // --- Exemplo 5: Busca de Caracteres Especiais ---
    // Encontra a posição de uma vírgula em uma string.
    echo "--- Exemplo 5: Busca de Caracteres Especiais ---\n";      
    $textoEspecial = "Olá, Mundo!";
    $posicao = strpos($textoEspecial, ",");
    echo "5. Posição de ',' (strpos(\\$textoEspecial, ',')): $posicao\n\n"; 
    echo "==================================================\n";
    echo "Fim dos exemplos.\n";
    echo "==================================================\n";
?>