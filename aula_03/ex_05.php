<?php
    function SomaElementos($lista){
        $soma = 0;
        for($i = 0; $i < count($lista); $i++){
            $soma += $lista[$i];
        }
        return $soma;
    }

    $lista_num = [1, 2, 3, 4, 34, 458, 10];
    $resul = SomaElementos($lista_num);
    echo $resul;
?>