<?php   

// strrepeat.php
// Guia completo da função str_repeat() em PHP.
echo "==================================================\n";
echo "Guia de Exemplos da Função str_repeat()\n";
echo "==================================================\n\n";

$texto = "Odair";
echo "Texto Original: \"$texto\"\n\n";

// --- Exemplo 1: Repetição Simples ---
// Repete a string 3 vezes.
echo "--- Exemplo 1: Repetição Simples ---\n";
$repetido = str_repeat($texto, 3);
echo "1. Repetindo 3 vezes (str_repeat(\\$texto, 3)): \"$repetido\"\n\n";

//      
// --- Exemplo 2: Repetição com Espaço ----
// Repete a string 4 vezes, separando cada repetição com um espaço.
echo "--- Exemplo 2: Repetição com Espaço ---\n";
$repetido = trim(str_repeat($texto . " ", 4));
echo "2. Repetindo 4 vezes com espaço (trim(str_repeat(\\$texto . ' ', 4))): \"$repetido\"\n\n";

// --- Exemplo 3: Repetição com Nova Linha ---
// Repete a string 2 vezes, cada repetição em uma nova linha.
echo "--- Exemplo 3: Repetição com Nova Linha ---\n";
$repetido = str_repeat($texto . "\n", 2);
echo "3. Repetindo 2 vezes com nova linha (str_repeat(\\$texto . \"\\n\", 2)):\n$repetido\n";   
echo "==================================================\n";
echo "Fim dos exemplos.\n";
echo "==================================================\n";

?>