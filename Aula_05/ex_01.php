<?php
    $produtos = [
        "produto1" => [
            "nome" => "Garrafa",
            "preco" => 28,
            "quantidade" => 30
        ],
        "produto2" => [
            "nome" => "Copo",
            "preco" => 20,
            "quantidade" => 20
        ],
        "produto3" => [
            "nome" => "Mouse",
            "preco" => 35,
            "quantidade" => 20
        ],
    ];

    $json = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);
?>