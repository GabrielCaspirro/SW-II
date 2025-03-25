<?php
    $produtos = [
        [
            "nome" => "Garrafa",
            "preco" => 28,
            "quantidade" => 30
        ],
        [
            "nome" => "Copo",
            "preco" => 20,
            "quantidade" => 20
        ],
        [
            "nome" => "Mouse",
            "preco" => 35,
            "quantidade" => 20
        ],
    ];

    $json = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);
?>