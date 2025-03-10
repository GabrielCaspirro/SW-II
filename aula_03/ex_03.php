<?php
    function ParOuImpar($num){
        if ($num % 2 == 0){
            return "Par";
        }
        else{
            return "Ímpar";
        }
    }

    $resul = ParOuImpar(6);
    echo $resul;
?>