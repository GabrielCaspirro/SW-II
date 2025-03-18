<?php
    $conteudo = file_get_contents("usuarios.json");
    $usuarios = json_decode($conteudo, true);

    print_r($usuarios);
?>