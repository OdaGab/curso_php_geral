<?php   

// strpad.php
// Guia completo da função str_pad() em PHP.
echo "==================================================\n";
echo "Guia de Exemplos da Função str_pad()\n";
echo "==================================================\n\n";      

$texto = "Odair";
echo "Texto Original: \"$texto\"\n\n";
// --- Exemplo 1: Preenchimento à direita ---
// Preenche a string até um comprimento total de 10 caracteres, adicionando '*' à direita.

echo "--- Exemplo 1: Preenchimento à direita ---\n";
$preenchido = str_pad($texto, 10, "*", STR_PAD_RIGHT);
echo "1. Preenchendo à direita até 10 caracteres (str_pad(\\$texto, 10, '*', STR_PAD_RIGHT)): \"$preenchido\"\n\n";


// --- Exemplo 2: Preenchimento à esquerda ---
// Preenche a string até um comprimento total de 10 caracteres, adicionando '#' à esquerda.

echo "--- Exemplo 2: Preenchimento à esquerda ---\n";
$preenchido = str_pad($texto, 10, "#", STR_PAD_LEFT);
echo "2. Preenchendo à esquerda até 10 caracteres (str_pad(\\$texto, 10, '#', STR_PAD_LEFT)): \"$preenchido\"\n\n";


// --- Exemplo 3: Preenchimento em ambos os lados ---
// Preenche a string até um comprimento total de 12 caracteres, adicionando '-' em ambos os lados.

echo "--- Exemplo 3: Preenchimento em ambos os lados ---\n";
$preenchido = str_pad($texto, 12, "-", STR_PAD_BOTH);
echo "3. Preenchendo em ambos os lados até 12 caracteres (str_pad(\\$texto, 12, '-', STR_PAD_BOTH)): \"$preenchido\"\n\n";


// --- Exemplo 4: Preenchimento com string maior ---
// Preenche a string até um comprimento total de 15 caracteres, usando 'abc' como string de preenchimento.

echo "--- Exemplo 4: Preenchimento com string maior ---\n";
$preenchido = str_pad($texto, 15, "abc", STR_PAD_RIGHT);
echo "4. Preenchendo até 15 caracteres com 'abc' (str_pad(\\$texto, 15, 'abc', STR_PAD_RIGHT)): \"$preenchido\"\n\n";
echo "==================================================\n";
echo "Fim dos exemplos.\n";
echo "==================================================\n";

?>