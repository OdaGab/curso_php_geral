<?php 
     // Acesso a Arrays em PHP
     echo "==================================================\n";
     echo "Guia de Acesso a Arrays em PHP\n";
     echo "==================================================\n\n";
        // --- Exemplo 1: Acesso por Índice Numérico ---
        echo "--- Exemplo 1: Acesso por Índice Numérico ---\n";
        $cores = array("Vermelho", "Verde", "Azul");
        echo "1. Cor no índice 0: " . $cores[0] . "\n\n";
        // --- Exemplo 2: Acesso por Índice Associativo ---
        echo "--- Exemplo 2: Acesso por Índice Associativo ---\n";
        $pessoa = array(
            "nome" => "Odair",
            "idade" => 30,
            "cidade" => "São Paulo"
        );
        echo "2. Nome da Pessoa: " . $pessoa["nome"] . "\n\n";
        // --- Exemplo 3: Acesso a Elementos em Arrays Multidimensionais ---
        echo "--- Exemplo 3: Acesso a Elementos em Arrays Multidimensionais ---\n";
        $alunos = array(
            array("nome" => "Ana", "idade" => 20),
            array("nome" => "Bruno", "idade" => 22),
            array("nome" => "Carla", "idade" => 21)
        );
        echo "3. Nome do segundo aluno: " . $alunos[1]["nome"] . "\n\n";
        // --- Exemplo 4: Acesso com Loops ---
        echo "--- Exemplo 4: Acesso com Loops ---\n";
        echo "4. Lista de Cores:\n";
        foreach ($cores as $cor) {
            echo "- $cor\n";
        }
        echo "\n";
        // --- Exemplo 5: Verificação de Existência de Índice ---
        echo "--- Exemplo 5: Verificação de Existência de Índice ---\n";
        $indice = 2;
        if (isset($cores[$indice])) {
            echo "5. O índice $indice existe no array e sua cor é: " . $cores[$indice] . "\n\n";
        } else {
            echo "5. O índice $indice não existe no array.\n\n";
        }
     echo "==================================================\n";
     echo "Fim dos exemplos.\n";
     echo "==================================================\n";
?>   

    