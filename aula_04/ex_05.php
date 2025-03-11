<?php
    $alunos_notas = ["Kevyn" => 2, "Paulo" => 10, "Bryan" => 7];
    $soma = 0;
    
    foreach ($alunos_notas as $nome => $valor) {
        $soma += $valor;
    }
    $resul = $soma / count($alunos_notas);
    echo "Média: " . $resul;
?>