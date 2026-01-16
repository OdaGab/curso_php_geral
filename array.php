<php 

    // codigo PHP

    // Variável do tipo Array

    // Em PHP, um array é uma estrutura de dados que pode armazenar múltiplos valores em uma única variável. Os arrays podem ser indexados numericamente ou associativos (usando chaves personalizadas).

    // Declaração de um array indexado
    $frutas = array("Maçã", "Banana", "Laranja");

    // Declaração de um array associativo
    $pessoa = array(
        "nome" => "Odair",
        "idade" => 30,
        "cidade" => "São Paulo"
    );

    // Exibindo o valor das variáveis do tipo Array

    // Exibindo o array indexado
    echo "Frutas: " . implode(", ", $frutas) . "\n"; // Usando implode para exibir os elementos do array

    // Exibindo o array associativo
    echo "Nome: " . $pessoa["nome"] . "\n"; // Acessando o valor pela chave 'nome'
    echo "Idade: " . $pessoa["idade"] . "\n"; // Acessando o valor pela chave 'idade'
    echo "Cidade: " . $pessoa["cidade"] . "\n"; // Acessando o valor pela chave 'cidade'    
?>