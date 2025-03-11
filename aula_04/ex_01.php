<?php
    $pessoa = ["nome" => "Gabriel", "idade" => 17, "cidade" => "Ribeirão Pires", "profissao" => "Desenvolvedor"];
    $amigos = ["Kevyn Marques", "Paulo Augusto", "Bryan Almeida"];

    $dados = array_merge($pessoa, $amigos);

    print_r($dados);
?>