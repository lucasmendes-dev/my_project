<?php 
    include_once("config/url.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucas Mendes</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0-beta1/css/bootstrap.min.css" integrity="sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="nav-div">
        <nav class="nav-link">
            <a href="<?= $BASE_URL ?>">Home</a>
            <a href="<?= $BASE_URL ?>cursos.php">Cursos</a>
            <a href="<?= $BASE_URL ?>videos.php">Videos</a>
            <a href="<?= $BASE_URL ?>sobre.php">Sobre</a>
            <a href="<?= $BASE_URL ?>contato.php">Contato </a>
        </nav>
        <a class="login" href="login.php">Login</a>




    </div>

