<?php
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);
    array_push($produtos, array("nome" => "Carregador", "preco" => 20, "quantidade" => 30));

    print_r($produtos);
    $json = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);
?>