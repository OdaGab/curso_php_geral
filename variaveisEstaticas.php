<?php

  // Exemplo de variáveis estáticas em PHP
  // Declaração de uma variável estática dentro de uma classe


class MinhaClasse {
    public static $minhaVariavelEstatica = "Valor Inicial";

    public static function minhaFuncaoEstatica() {
        return "Este é um método estático.";
    }
}   
// Acessando a variável estática sem instanciar a classe
echo MinhaClasse::$minhaVariavelEstatica . "\n";

// Chamando o método estático
echo MinhaClasse::minhaFuncaoEstatica() . "\n";

?>

