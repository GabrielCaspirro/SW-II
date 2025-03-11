<?php
    $lista_num = [10, 12, 2, 3, 4, 7, 8, 12, 24, 5];
    $maior = $lista_num[0];
    $menor = $lista_num[0];

    for($i = 0; $i < count($lista_num); $i++){
        if($maior < $lista_num[$i]){
            $maior = $lista_num[$i];
        }
        if($menor > $lista_num[$i]){
            $menor = $lista_num[$i];
        }
    }

    echo $maior . "<br>";
    echo $menor . "<br>";
?>