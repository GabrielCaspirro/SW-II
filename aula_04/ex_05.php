<?php
    $alunos_notas = ["Kevyn" => 2, "Paulo" => 10, "Bryan" => 7];
    $soma = 0;
    
    foreach ($alunos_notas as $nome => $valor) {
        $soma += $valor;
    }
    $resul = $soma / count($alunos_notas);
    echo "Média: " . $resul . "<br>";

    //Desafio
    $maiorNota = 0;
    $nomeMaiorNota = "";
    foreach ($alunos_notas as $nome => $valor) {
        if ($valor > $maiorNota){
            $maiorNota = $valor;
            $nomeMaiorNota = $nome;
        }
    }
    if ($maiorNota != 0){
        echo $nomeMaiorNota . ": " . $maiorNota;
    }
    else{
        echo "Todos tiraram zero.";
    }
?>