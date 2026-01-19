<?php

// substr.php
// Guia completo da função substr() em PHP.

echo "==================================================\n";
echo "Guia de Exemplos da Função substr()\n";
echo "==================================================\n\n";

$texto = "Odair Gabriel da Silva";

echo "Texto Original: \"$texto\"\n\n";

// --- Exemplo 1: Uso Básico ---
// Pega os primeiros 5 caracteres.
echo "--- Exemplo 1: Uso Básico ---\n";
$parte = substr($texto, 0, 5);
echo "1. Pegando os 5 primeiros caracteres (substr(\\$texto, 0, 5)): \"$parte\"\n\n";

// --- Exemplo 2: Do meio para o fim ---
// Pega tudo a partir do índice 11.
echo "--- Exemplo 2: Do meio para o fim ---\n";
$parte = substr($texto, 6);
echo "2. Pegando do 6º caractere até o final (substr(\\$texto, 6)): \"$parte\"\n\n";

// --- Exemplo 3: Usando um índice inicial negativo ---
// Começa a contar do final da string. Pega os últimos 8 caracteres.
echo "--- Exemplo 3: Índice inicial negativo ---\n";
$parte = substr($texto, -8);
echo "3. Pegando os últimos 8 caracteres (substr(\\$texto, -8)): \"$parte\"\n\n";

// --- Exemplo 4: Usando um comprimento negativo ---
// Começa no 11º caractere e termina 8 caracteres ANTES do final.
echo "--- Exemplo 4: Comprimento negativo ---\n";
$parte = substr($texto, 11, -8);
echo "4. Pegando do 11º caractere e terminando 8 antes do fim (substr(\\$texto, 11, -8)): \"$parte\"\n\n";

// --- Exemplo 5: Combinação de negativos ---
// Começa 17 caracteres ANTES do fim e pega 9 caracteres.
echo "--- Exemplo 5: Combinação de negativos ---\n";
$parte = substr($texto, -17, 9);
echo "5. Começando 17 caracteres do fim e pegando 9 (substr(\\$texto, -17, 9)): \"$parte\"\n\n";

echo "==================================================\n";
echo "Fim dos exemplos.\n";
echo "==================================================\n";

?>