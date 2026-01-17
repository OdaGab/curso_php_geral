<?php
    
    // Exemplo de passagem de parâmetros em PHP

    function saudacao($nome) {
        return "Olá, " . $nome . "!";
    }

    echo saudacao("Maria") . "\n";
    echo saudacao("João") . "\n";

    // Exercícios
    // Crie outras funções que recebam múltiplos parâmetros e retornem valores diferentes

    function soma($a, $b) {
        return $a + $b;
    }

    function concatenarStrings($str1, $str2) {
        return $str1 . " " . $str2;
    }

    echo "Soma de 5 e 10: " . soma(5, 10) . "\n";
    echo "Concatenando 'Olá' e 'Mundo': " . concatenarStrings("Olá", "Mundo") . "\n";
    
    // Teste em outros senários
?>

