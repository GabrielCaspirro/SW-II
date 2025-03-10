<?php
    function Tabuada($num){
        $list = [];
        for ($i = 1; $i <= 10; $i++){
            $list[$i - 1] = $num * $i;
        }
        return $list;
    }

    $resul = Tabuada(7);
    foreach($resul as $num){
        echo $num . "<br>";
    }
?>