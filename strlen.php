<?php   

// strlen.php
// Guia completo da função strlen() em PHP.
echo "==================================================\n";
echo "Guia de Exemplos da Função strlen()\n";
echo "==================================================\n\n";  
$texto = "Odair Gabriel da Silva";
echo "Texto Original: \"$texto\"\n\n";
// --- Exemplo 1: Comprimento Básico ---
// Calcula o comprimento da string.
echo "--- Exemplo 1: Comprimento Básico ---\n";
$comprimento = strlen($texto);
echo "1. Comprimento da string (strlen(\\$texto)): $comprimento\n\n";
// --- Exemplo 2: String Vazia ---
// Calcula o comprimento de uma string vazia.
echo "--- Exemplo 2: String Vazia ---\n";
$textoVazio = "";       
$comprimentoVazio = strlen($textoVazio);
echo "2. Comprimento de string vazia (strlen(\\$textoVazio)): $comprimentoVazio\n\n";
// --- Exemplo 3: String com Espaços ---
// Calcula o comprimento de uma string com espaços.     
echo "--- Exemplo 3: String com Espaços ---\n";
$textoComEspacos = "   Espaços   ";
$comprimentoComEspacos = strlen($textoComEspacos);
echo "3. Comprimento de string com espaços (strlen(\\$textoComEspacos)): $comprimentoComEspacos\n\n";
// --- Exemplo 4: String com Caracteres Especiais ---
// Calcula o comprimento de uma string com caracteres especiais.
echo "--- Exemplo 4: String com Caracteres Especiais ---\n";
$textoEspecial = "Olá, Mundo! ñ á é ü";
$comprimentoEspecial = strlen($textoEspecial);
echo "4. Comprimento de string com caracteres especiais (strlen(\\$textoEspecial)): $comprimentoEspecial\n\n";
// --- Exemplo 5: String Multibyte ---
// Calcula o comprimento de uma string multibyte (UTF-8).
echo "--- Exemplo 5: String Multibyte ---\n";           
$textoMultibyte = "こんにちは"; // "Olá" em japonês
$comprimentoMultibyte = strlen($textoMultibyte);
echo "5. Comprimento de string multibyte (strlen(\\$textoMultibyte)): $comprimentoMultibyte\n\n";
echo "==================================================\n";
echo "Fim dos exemplos.\n";
echo "==================================================\n";

?>