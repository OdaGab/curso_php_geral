<?php
    // Exemplo de API ViaCEP em PHP
    // Fazendo uma requisição para a API ViaCEP
    $cep = "01001000";  // CEP de exemplo
    $url = "https://viacep.com.br/ws/$cep/json/";

    // Inicializa o cURL
    $curl = curl_init();

    // Configurações do cURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // Executa a requisição e armazena a resposta
    $response = curl_exec($curl);

    // Verifica se ocorreu algum erro durante a requisição
    if ($response === false) {
        echo 'Erro no cURL: ' . curl_error($curl);
    }

    // Fecha a conexão cURL
    curl_close($curl);

    // Decodifica o JSON da resposta
    $dados = json_decode($response, true);

    // Exibe os dados do endereço
    if (isset($dados['erro'])) {
        echo "CEP não encontrado.\n";
    } else {
        echo "CEP: {$dados['cep']}\n";
        echo "Logradouro: {$dados['logradouro']}\n";
        echo "Complemento: {$dados['complemento']}\n";
        echo "Bairro: {$dados['bairro']}\n";
        echo "Localidade: {$dados['localidade']}\n";
        echo "UF: {$dados['uf']}\n";
        echo "IBGE: {$dados['ibge']}\n";
        echo "GIA: {$dados['gia']}\n";
        echo "DDD: {$dados['ddd']}\n";
        echo "SIAFI: {$dados['siafi']}\n";
    }
?>