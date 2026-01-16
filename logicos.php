<?php

    // codogo PHP

    /*  
    O que este código demonstra:
    Operadores Lógicos: Uso de && (E), || (OU), e ! (NÃO) para combinar expressões booleanas.
    Estrutura Condicional: Uso do if para tomar decisões baseadas em condições lógicas.
    Saída de Texto: Uso do echo para exibir resultados das avaliações lógicas.
    */  
    $a = 8;
    $b = 12;    
    echo "--- Operadores Lógicos em PHP ---\n";
    // Operador E (&&)
    if ($a < 10 && $b > 10) {
        echo "Condição E (&&) é verdadeira: a é menor que 10 E b é maior que 10.\n";
    }    
    // Operador OU (||)
    if ($a > 10 || $b > 10) {
        echo "Condição OU (||) é verdadeira: a é maior que 10 OU b é maior que 10.\n";
    }    
    // Operador NÃO (!)
    if (!($a > 10)) {
        echo "Condição NÃO (!) é verdadeira: a NÃO é maior que 10.\n";
    }    
    echo "Fim do script.\n";
?>