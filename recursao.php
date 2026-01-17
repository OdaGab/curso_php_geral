<?php
    
    // Exemplo de Recursão em PHP
    // Função recursiva para calcular o fatorial de um número

    
    function fatorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * fatorial($n - 1);
        }
    }   
    echo "Fatorial de 5: " . fatorial(5) . "\n"; // Saída: 120
    echo "Fatorial de 7: " . fatorial(7) . "\n"; // Saída: 5040
    // Exercícios
    // Crie outras funções recursivas, como para calcular a soma de uma série ou a sequência de Fibonacci   
    function somaSerie($n) {
        if ($n <= 1) {
            return $n;
        } else {
            return $n + somaSerie($n - 1);
        }
    }   
    echo "Soma da série de 5: " . somaSerie(5) . "\n"; // Saída: 15 
    echo "Soma da série de 10: " . somaSerie(10) . "\n"; // Saída: 55
    function fibonacci($n) {
        if ($n <= 1) {
            return $n;
        } else {
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }   
    echo "Sequência de Fibonacci de 5: " . fibonacci(5) . "\n"; // Saída: 5
    echo "Sequência de Fibonacci de 10: " . fibonacci(10) . "\n"; // Saída: 55
    // Teste em outros senários
?>