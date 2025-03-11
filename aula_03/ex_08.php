<?php
    function NumerosAleatorios(){
        $random_numbers = [];

        for($i = 0; $i < 10; $i++){
            $num = rand(0, 100);
            $random_numbers[$i] = $num;
        }

        return $random_numbers;
    }

    $recebe_vetor = NumerosAleatorios();
    for ($i = 0; $i < count($recebe_vetor); $i++){
        echo $recebe_vetor[$i] . '<br>';
    }
?>