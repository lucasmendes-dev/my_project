<?php
    include_once('templates/header.php');
    include_once("config/url.php");

    session_start(); 
    if(!empty($_SESSION["check"]) & $_SESSION["check"] != "") {
        $check = $_SESSION["check"];
        $_SESSION["check"] = ""; 
    }
?>

    <div>
        <h1 id="title-container">Cadastro</h1>
    </div>
    <div id="main-container">
            <form class="formulario"action="<?= $BASE_URL ?>config/process.php" method="POST">
                <input type="hidden" name="type" value="cadastro">
                <div class="form-container">
                    <label class="form-label" for="name">Nome:</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Digite seu nome" required>
                </div>
                <div class="form-container">
                    <label class="form-label" for="login">Email:</label>
                    <input class="form-control" type="text" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="form-container">
                    <label class="form-label" for="password">Senha:</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="Digite sua senha" required>
                </div>
                <div class="form-container">
                    <label class="form-label" for="checkpassword">Digite a senha novamente:</label>
                    <input class="form-control" type="password" name="checkpassword" id="checkpassword" placeholder="Digite a senha novamente" required>
                </div>
                <?php if(isset($check)): ?>
                    <p class="msg"><?= $check ?></p>
                <?php endif; ?>
                <input type="submit" class="btn btn-primary mb-3" value="Cadastrar">
    </div>

<?php
    include_once('templates/footer.php');
?>
