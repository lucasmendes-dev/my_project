<?php
    include_once('templates/header.php');
    session_start(); 
    if(!empty($_SESSION["erro"]) & $_SESSION["erro"] != "") {
        $msg = $_SESSION["erro"];
        $_SESSION["erro"] = ""; 
    }

    if(!empty($_SESSION["cadastro"]) & $_SESSION["cadastro"] != "") {
        $cadastro = $_SESSION["cadastro"];
        $_SESSION["cadastro"] = "";
    }

?>


    <div>
        <h1 id="title-container">Login</h1>
    </div>
    <div id="main-container">
        <form class="formulario"action="logado.php" method="POST">
            <?php if(isset($cadastro)): ?>
                <p class="cadastro"><?= $cadastro ?></p>
            <?php endif; ?>
            <div class="form-container">
                <label class="form-label" for="login">Email:</label>
                <input class="form-control" type="text" name="login" id="login" placeholder="Digite seu email" required>
            </div>
            <div class="form-container">
                <label class="form-label" for="password">Senha:</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha" required>
            </div>
            <?php if(isset($msg)): ?>
                <p class="msg"><?= $msg ?></p>
            <?php endif; ?>
            <input type="submit" class="btn btn-primary mb-3" value="Entrar">
        </form>
        <p>Não possui cadastro? Clique <a href="<?= $BASE_URL ?>cadastro.php">aqui</a> para se cadastrar.</p>
    </div>


<?php
    include_once('templates/footer.php');
?>
