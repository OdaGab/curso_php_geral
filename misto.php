<?php
   
   // Em PHP, você não declara explicitamente uma variável como sendo de "tipo misto" no mesmo sentido que em 
   // linguagens com tipagem estática, pois o PHP é uma linguagem de tipagem dinâmica. 
   // Uma variável pode armazenar dados de qualquer tipo e seu tipo pode mudar durante a execução do programa.
   // O pseudo-tipo mixed (misto) é usado em declarações de tipo (como em parâmetros de função, 
   // retornos ou propriedades de classe, a partir do PHP 8.0) para indicar que um elemento pode aceitar qualquer tipo de valor 
   // (incluindo string, int, float, bool, null, array, object, callable e resource). 

   // Exemplo de uso do tipo mixed em uma função
   // O mixed é útil ao declarar funções que precisam ser flexíveis quanto aos tipos de dados que manipulam.

   // A função processaValor aceita um parâmetro de tipo 'mixed'
   // e pode retornar um valor de tipo 'mixed' ou 'void' (nulo) dependendo do caso.
function processaValor(mixed $valor): mixed {
    if (is_int($valor)) {
        echo "Inteiro recebido: " . ($valor * 2) . "\n";
        return $valor * 2;
    } elseif (is_string($valor)) {
        echo "String recebida: " . strtoupper($valor) . "\n";
        return strtoupper($valor);
    } elseif (is_array($valor)) {
        echo "Array recebido. Contém " . count($valor) . " elementos.\n";
        // Retorna void (nada) neste caso específico do exemplo
        return $valor; 
    } else {
        echo "Outro tipo recebido: " . get_debug_type($valor) . "\n";
        return $valor;
    }
}

// Testando a função com diferentes tipos de variáveis
processaValor(10);             // Saída: Inteiro recebido: 20
processaValor("olá mundo");    // Saída: String recebida: OLÁ MUNDO
processaValor([1, 2, 3]);      // Saída: Array recebido. Contém 3 elementos.
processaValor(true);           // Saída: Outro tipo recebido: bool
processaValor(null);           // Saída: Outro tipo recebido: null

?>
