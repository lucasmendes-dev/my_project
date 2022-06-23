<?php
    
    include_once("data.php");
    include_once("templates/header.php");

    $autenticacao = false;
    foreach($users as $user){            
        
        if($_POST["login"] == $user["email"]) {   
            $autenticacao = true;
            echo "Bem vindo(a) " . $user["nome"];

        }     
    }

    if($autenticacao == false) {

        session_start();
        $_SESSION["erro"] = "Login ou senha incorretos, tente novamente";
        header("Location: login.php");

    }



?>
