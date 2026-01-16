<?php

    // codigo PHP

    /*
    
    O que este código demonstra:
    Constantes: Usei const para o nome do sistema e define para a taxa.

    Mixed & Callbacks: A função calcular aceita qualquer valor (mixed) e uma lógica variável via callable.

    Tipagem estrita: Mostra a diferença entre == (valor) e === (valor e tipo).

    Concatenação: Uso do ponto . para unir as strings nas saídas do echo.
    
    
    */


// 1. DEFINIÇÃO DE CONSTANTES
const NOME_SISTEMA = "Calculadora PHP 8.0";
define("TAXA_SERVICO", 0.05); // 5%

// 2. FUNÇÃO COM CALLBACK E TIPAGEM MIXED
// Esta função recebe dois números e uma "ação" (callback) para processá-los
function calcular(mixed $n1, mixed $n2, callable $operacao): mixed {
    return $operacao($n1, $n2);
}

echo "--- " . NOME_SISTEMA . " ---\n";

// 3. OPERADORES ARITMÉTICOS E ATRIBUIÇÃO
$a = 10;
$b = 3;

$soma = $a + $b;           // Adição
$potencia = $a ** $b;      // Exponenciação (10 elevado a 3)
$a += 5;                   // Atribuição com Adição ($a agora é 15)

// 4. OPERADORES DE COMPARAÇÃO (IDÊNTICO VS IGUAL)
$valorTexto = "15";
$ehIdentico = ($a === $valorTexto); // false (tipos diferentes: int vs string)
$ehIgual = ($a == $valorTexto);    // true (PHP converte para comparar)

// 5. OPERADORES LÓGICOS E CONCATENAÇÃO (.)
if ($a > 10 && $ehIgual) {
    echo "O valor de A é: " . $a . " e ele passou nos testes lógicos.\n";
}

// 6. USO DE CALLBACK (ARROW FUNCTION)
// Passamos uma função que multiplica os valores e aplica a TAXA_SERVICO
$resultadoFinal = calcular($a, $b, fn($x, $y) => ($x * $y) * (1 + TAXA_SERVICO));

// 7. OPERADOR DE COALESCÊNCIA NULA (??)
// Tenta pegar um desconto, se não existir, usa 0
$desconto = $dados['desconto'] ?? 0;

echo "Resultado da Operação com Callback: " . $resultadoFinal . "\n";
echo "Desconto aplicado: " . $desconto . "\n";
echo "Fim do script.\n";

?>