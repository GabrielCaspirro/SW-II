<?php
    $json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';

    $obj = json_decode($json_str);

    if(json_last_error() == 0){
        echo "Não houve erro! O parsing foi perfeito.";
    }
    else{
        echo "Houve um erro!";
        switch(json_last_error()){
            case JSON_ERROR_DEPTH:
                echo ' - profundidade máxima excedida';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                echo ' - state mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                echo ' - caracter de controle encontrado';
                break;
            case JSON_ERROR_SYNTAX:
                echo ' - erro de sintaxe! String JSON mal formatada';
                break;
            case JSON_ERROR_UFT8:
                echo ' - erro na codificação UTF-8';
                break;
            default:
                echo "Erro desconhecido";
            break;
        }
    }
?>