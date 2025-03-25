<?php
    $email = "gabriel@email.com";
    $usuarios = file_get_contents("usuarios.json");

    $usuariosArray = json_decode($usuarios, true)["usuarios"];
    $encontrado = false;

    foreach($usuariosArray as $user){
        if($user["email"] == $email){
            echo "ID: " . $user["id"] . "<br>";
            echo "Nome: " . $user["nome"] . "<br>";
            echo "Email: " . $user["email"] . "<br>";
            echo "Idade: " . $user["idade"] . "<br>";
            $encontrado = true;
            break;
        }
    }

    if(!$encontrado){
        echo "Não foi encontrado um usuário com o email " . $email;
    }
?>