<?php
    include_once('templates/header.php');
    session_start(); 
    if(!empty($_SESSION["erro"]) & $_SESSION["erro"] != "") {
        $msg = $_SESSION["erro"];
        $_SESSION["erro"] = ""; 
    }
?>
<?php if(isset($msg)): ?>
    <p class="msg"><?= $msg ?></p>
<?php endif; ?>

<div id="main-container">
        <form class="formulario"action="logado.php" method="POST">
            <div class="form-container">
                <label class="form-label" for="login">Login:</label>
                <input class="form-control" type="text" name="login" id="login" placeholder="Digite seu login">
            </div>
            <div class="form-container">
                <label class="form-label" for="password">Senha:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha">
            </div>
            <input type="submit" class="btn btn-primary mb-3" value="Entrar">
        </form>
    </div>


<?php
    include_once('templates/footer.php');
?>
