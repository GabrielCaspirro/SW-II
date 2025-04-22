<?php
    header("Content-Type: application/json");

    $metodo = $_SERVER['REQUEST_METHOD'];

    $arquivo = "usuarios.json";

    if(!file_exists($arquivo)){
        file_put_contents($arquivo, json_encode([], JSON_PRETTY_PRINT || JSON_UNESCAPED_UNICODE));
    }
    
    $usuarios = json_decode(file_get_contents($arquivo), true);

    switch($metodo){
        case 'GET':
            //echo "Ações do método GET ";
            echo json_encode($usuarios, JSON_PRETTY_PRINT || JSON_UNESCAPED_UNICODE);
            break;
        case 'POST':
            //echo "Ações do método POST";
            $dados = json_decode(file_get_contents('php://input'), true);

            if(!isset($dados["id"]) || !isset($dados["nome"]) || !isset($dados["email"])){
                http_response_code(400);
                echo json_encode(["erro" => "Dados incompletos."], JSON_UNESCAPED_UNICODE);
                exit;
            }

            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            $usuarios[] = $novoUsuario;

            file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT || JSON_UNESCAPED_UNICODE));
            echo json_encode(["mensagem" => "Usuário inserido com sucesso! ", "usuarios" => $usuarios], JSON_UNESCAPED_UNICODE);

            break;
        default:
            http_response_code(400);
            echo json_encode(["erro" => "Dados incompletos."], JSON_UNESCAPED_UNICODE);
            break;
    }
?>