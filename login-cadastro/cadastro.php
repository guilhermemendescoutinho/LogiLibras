<?php
    include "conexao.php";

    if(! isset($_POST['enviar'])){
        // Caso aconteça o erro...
        exit;
    }

    // Cadê a verificação da senha?
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    //$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $senha = $_POST['senha'];
    $userData = "INSERT INTO user values (?, ?, ?)";

    //  if(!password_verify($_POST['confirmar'], $senha)) {
    //      echo "Erro. Senhas não conferem.";
    //      exit;
    // }

    $stmt = $mysqli->prepare($userData);

    $stmt->bind_param("sss", $nome, $email, $senha);

    $resultUser = $stmt->execute();

    if(!$resultUser or $mysqli->affected_rows == 0){
        echo "Erro";
        exit;
    }

    // O que o sistema deve fazer quando estiver correto
    header("location: login.html");
    // echo "Conectado";