<?php
    // codigo PHP

    // Variável do tipo objeto
    // Em PHP, um objeto é uma instância de uma classe, que é uma estrutura que define propriedades (variáveis) e métodos (funções) 
    // relacionados a um determinado tipo de dado ou funcionalidade.
    // Declaração de uma classe

    class Carro {

        // Propriedades da classe

        public $marca;
        public $modelo;
        public $ano;            

        // Método da classe

        public function exibirDetalhes() {
            return "Marca: " . $this->marca . ", Modelo: " . $this->modelo . ", Ano: " . $this->ano;
        }
    }   

    // Criando uma instância (objeto) da classe Carro
    $meuCarro = new Carro();

    // Atribuindo valores às propriedades do objeto
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->ano = 2020;
    
    // Exibindo os detalhes do carro usando o método do objeto
    echo $meuCarro->exibirDetalhes() . "\n";
?>