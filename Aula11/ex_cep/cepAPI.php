<?php 
    function ProcurarCep($cep){
        $url = "https://viacep.com.br/ws/" . $cep . "/json";
        $response = file_get_contents($url);
        $respCep = json_decode($response, true);
        return $respCep;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Cep</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET" class="form">
        <input type="text" name="cep" placeholder="CEP ex: 09412350">
        <button type="submit">Procurar</button>
    </form>
    <?php 
        if (isset($_GET['cep']) && !empty($_GET['cep'])){
            $valor = $_GET['cep'];
            $processado_valor = preg_replace('/[^0-9]/', '', $valor); 
            if(strlen($processado_valor) >= 8){
                $resultado = ProcurarCep($processado_valor);

                if (isset($resultado['erro'])) {
                    echo "<p>CEP não encontrado.</p>";
                } else {
                    echo "<div class='resultado'>";
                    echo "<p><strong>Logradouro:</strong> " . $resultado['logradouro'] . "</p>";
                    echo "<p><strong>Bairro:</strong> " . $resultado['bairro'] . "</p>";
                    echo "<p><strong>Localidade:</strong> " . $resultado['localidade'] . "</p>";
                    echo "<p><strong>UF:</strong> " . $resultado['uf'] . "</p>";
                    echo "<p><strong>Estado:</strong> " . $resultado['estado'] . "</p>";
                    echo "<p><strong>Região:</strong> " . $resultado['regiao'] . "</p>";
                    echo "</div>";
                }
            }
            else{
                echo "<p>Digite de acordo com o formato definido.</p>";
            }
        }
    ?>
</body>
</html>