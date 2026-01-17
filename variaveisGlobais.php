<?php
    // Exemplo de variáveis globais em PHP
    $variavelGlobal = "Esta é uma variável global";

    function mostrarVariavelGlobal() {
        global $variavelGlobal;
        echo $variavelGlobal;
    }

    mostrarVariavelGlobal();
?>
<?php
    // Exercícios
    // Teste em outros senários 
    // Crie outras variáveis globais e acesse-as dentro de funções diferentes
    
    $outraVariavelGlobal = "Outra variável global";     


    function mostrarOutraVariavelGlobal() {
        global $outraVariavelGlobal;
        echo $outraVariavelGlobal;
    }

    function mostramesmavariavelGlobal() {
        global $variavelGlobal;

        echo "\n Mostrando a mesma variável global novamente:\n";

        echo $variavelGlobal;
    }

    mostrarOutraVariavelGlobal();
    mostramesmavariavelGlobal();
?>
