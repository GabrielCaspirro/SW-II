<?php
    $empregados = array('empregados' => array(
        array(
            'nome' => 'Jason Jones',
            'idade' => 38,
            'sexo' => 'M'
        ),
        array(
            'nome' => 'Ada Pascalina',
            'idade' => 35,
            'sexo' => 'F'
        ),
        array(
            'nome' => 'Delphino da Silva',
            'idade' => 26,
            'sexo' => 'M'
        )
        ));

    $json_str = json_encode($empregados);

    echo "$json_str";
?>