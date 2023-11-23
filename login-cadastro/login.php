<?php

include "conexao.php";

$emailLogin = $_POST['email'];
//$senhaLogin = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$senhaLogin = $_POST['senha'];
print_r($senhaLogin);
echo "<br>";

$consulta = "SELECT * FROM user";
$resultado = $mysqli->query($consulta) or die($mysqli->error);

$encontrado = false;

if ($resultado->num_rows > 0) {
    while ($linha = $resultado->fetch_array()) {
        foreach ($linha as $valor) {
            if (strpos($valor, $emailLogin) !== false) {
                print_r($linha['senha']);
                $encontrado = true;

                if ($senhaLogin == $linha['senha']) {
                    //echo "senha correta";
                    header("location: ..");
                
                } else {
                    echo "senha incorreta";
                }

                break 2;
            }
        }
    }
}

if($encontrado == false){
    echo "dados não encontrados";
}