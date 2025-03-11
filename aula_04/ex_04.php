<?php
    $lista_num = [10, 12, 2, 3, 4, 7, 8, 12, 24, 5, 1, 13, 27, 103, 3];
    $pares = null;
    $impares = null;

    for($i = 0; $i < count($lista_num); $i++){
        if($lista_num[$i] % 2 == 0){
            $pares += 1;
        }
        else{
            $impares += 1;
        }
    }

    echo "Pares: " . $pares . "<br>";
    echo "Ímpares: " . $impares . "<br>";
?>