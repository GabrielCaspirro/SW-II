<?php
    $lista_num = [10, 12, 2, 3, 4, 7, 8, 12, 24, 5];
    $soma = 0;

    for($i = 0; $i < count($lista_num); $i++){
        $soma += $lista_num[$i];
    }

    echo $soma;
?>