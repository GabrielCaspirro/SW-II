<?php
    function Fatorial($num){
        $lista_num = [];
        $numero_mult = 1;

        for($i = 0; $i < $num; $i++){
            $lista_num[$i] = $num - $i;
        }

        for($j = 0; $j < count($lista_num); $j++){
            $numero_mult *= $lista_num[$j];
        }

        return $numero_mult;
    }

    $resul = Fatorial(5);
    echo $resul;
?>