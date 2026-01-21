<?php
// arrayPad.php
// Guia completo da função array_pad() em PHP.
echo "==================================================\n";
echo "Guia de Exemplos da Função array_pad()\n";
echo "==================================================\n\n";
$numeros = [1, 2, 3];
echo "Array Original:\n";
print_r($numeros);
echo "\n";
// --- Exemplo 1: Preenchendo para a direita ---
echo "--- Exemplo 1: Preenchendo para a direita ---\n";
$preenchido = array_pad($numeros, 6, 0);
echo "1. Array após preencher para a direita até 6 elementos (array_pad(\\$numeros, 6, 0)):\n";
print_r($preenchido);
echo "\n\n";
// --- Exemplo 2: Preenchendo para a esquerda ---
echo "--- Exemplo 2: Preenchendo para a esquerda ---\n";
$preenchido = array_pad($numeros, -5, 0);       
echo "2. Array após preencher para a esquerda até 5 elementos (array_pad(\\$numeros, -5, 0)):\n";
print_r($preenchido);
echo "\n\n";
// --- Exemplo 3: Preenchendo com string ---
echo "--- Exemplo 3: Preenchendo com string ---\n";
$preenchido = array_pad($numeros, 7, "PHP");
echo "3. Array após preencher para a direita até 7 elementos com 'PHP' (array_pad(\\$numeros, 7, 'PHP')):\n";
print_r($preenchido);
echo "\n\n";
// --- Exemplo 4: Preenchendo um array vazio ---
echo "--- Exemplo 4: Preenchendo um array vazio ---\n";
$vazio = [];
$preenchido = array_pad($vazio, 4, "vazio");
echo "4. Array vazio após preencher até 4 elementos com 'vazio' (array_pad(\\$vazio, 4, 'vazio')):\n";
print_r($preenchido);
echo "\n\n";
// --- Exemplo 5: Tamanho menor que o array original ---
echo "--- Exemplo 5: Tamanho menor que o array original ---\n";
$preenchido = array_pad($numeros, 2, 0);
echo "5. Array após preencher até 2 elementos (array_pad(\\$numeros, 2, 0)):\n";
print_r($preenchido);
echo "\n\n";
echo "==================================================\n";
?>