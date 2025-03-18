<?php
    $json = '{"nome":"Maria", "idade":30, "sexo": "F"}';

    $dados = json_decode($json, true);

    print_r($dados);
?>