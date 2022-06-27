<?php
    
    include_once("connection.php");
    include_once("url.php");

    session_start();

    if($_POST["password"] != $_POST["checkpassword"]){
        $_SESSION["check"] = "As senhas devem ser iguais";

        header("Location:" . $BASE_URL . "../cadastro.php");
    }

    else if($_POST["type"] == "cadastro") {
        
        $query = "INSERT INTO usuarios (name, email, password) VALUES (:name, :email, :password)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $_POST["name"]);
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->bindParam(":password", $_POST["password"]);

        $stmt->execute();
        
        $_SESSION["cadastro"] = "Cadastro efetuado com sucesso";
        header("Location:" . $BASE_URL . "../login.php");
    }

    


    
?>
