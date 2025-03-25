<?php
    $conteudo = file_get_contents("produtos.json");
    $produtos = json_decode($conteudo, true);
    
    $encontrado = false;
    for($i = 0; $i < count($produtos); $i++){
        if($produtos[$i]["nome"] == "Copo") {
            array_splice($produtos, $i, 1);
            $encontrado = true;
            break;
        }
    }

    if(!$encontrado){
        echo "Não foi encontrado nenhum produto com esse nome" . "<br>";
    }
    print_r($produtos);
    $json = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);
?>