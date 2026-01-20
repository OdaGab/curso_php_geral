<?php

// strreplace.php
// Guia completo da função str_replace() em PHP.    
echo "==================================================\n";
echo "Guia de Exemplos da Função str_replace()\n";
echo "==================================================\n\n";

$texto = "Odair Gabriel da Silva";
echo "Texto Original: \"$texto\"\n\n";

// --- Exemplo 1: Substituição Simples ---
// Substitui "Gabriel" por "Gomes".             
echo "--- Exemplo 1: Substituição Simples ---\n";
$modificado = str_replace("Gabriel", "Gomes", $texto);
echo "1. Substituindo 'Gabriel' por 'Gomes' (str_replace('Gabriel', 'Gomes', \\$texto)): \"$modificado\"\n\n";

// --- Exemplo 2: Substituição Múltipla ---
// Substitui "Odair" por "Carlos" e "Silva" por "Santos".
echo "--- Exemplo 2: Substituição Múltipla ---\n";
$modificado = str_replace(["Odair", "Silva"], ["Carlos", "Santos"], $texto);
echo "2. Substituindo 'Odair' por 'Carlos' e 'Silva' por 'Santos'' (str_replace(array('Odair', 'Silva'), array('Carlos', 'Santos'), \\$texto)): \"$modificado\"\n\n";

// --- Exemplo 3: Substituição com Contagem ---
// Substitui "a" por "o" e conta quantas substituições foram feitas.
echo "--- Exemplo 3: Substituição com Contagem ---\n";
$count = 0;
$modificado = str_replace("a", "o", $texto, $count);
echo "3. Substituindo 'a' por 'o' (str_replace('a', 'o', \\$texto, \\$count)): \"$modificado\"\n";
echo "Número de substituições feitas: $count\n\n";

// --- Exemplo 4: Substituição Sensível a Maiúsculas/Minúsculas ---
// Substitui "gabriel" por "Gomes" (não faz substituição porque é sensível a maiúsculas/minúsculas).
echo "--- Exemplo 4: Substituição Sensível a Maiúsculas/Minúsculas ---\n";
$modificado = str_replace("gabriel", "Gomes", $texto);
echo "4. Tentando substituir 'gabriel' por 'Gomes' (str_replace('gabriel', 'Gomes', \\$texto)): \"$modificado\"\n\n";

// --- Exemplo 5: Substituição com Strings Vazia ---
// Remove "da " da string.
echo "--- Exemplo 5: Substituição com Strings Vazia ---\n";
$modificado = str_replace("da ", "", $texto);
echo "5. Removendo 'da ' (str_replace('da ', '', \\$texto)): \"$modificado\"\n\n";
echo "==================================================\n";
echo "Fim dos exemplos.\n";
echo "==================================================\n";

?>