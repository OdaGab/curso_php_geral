<?php
    // codigo PHP 

    /*
    O que este código demonstra:
    Estrutura Condicional if: Uso básico do if para controle de fluxo.
    Comparação de Valores: Verifica se um número é positivo, negativo ou zero.
    Saída de Texto: Uso do echo para exibir mensagens baseadas na condição.
    */  
    $numero = -5; // Você pode alterar este valor para testar diferentes condições

    echo "--- Estrutura Condicional if em PHP ---\n";
    if ($numero > 0) {
        echo "O número " . $numero . " é positivo.\n";
    } elseif ($numero < 0) {
        echo "O número " . $numero . " é negativo.\n";
    } else {
        echo "O número é zero.\n";
    }
    echo "Fim do script.\n";
?>