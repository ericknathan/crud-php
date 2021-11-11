<?php
	if(empty($_SESSION)  && !isset($_SESSION)) session_start();
    
    $root = "/ericknathan/crud-php";

    if(!isset($_SESSION['user_id']) && strpos($_SERVER['REQUEST_URI'], 'login') == false) {
        header("Location: $root/auth/login");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEMA DE CADASTRO</title>

    <link rel="stylesheet" href="<?= $root ?>/public/styles/bootstrap.css">
    <link rel="stylesheet" href="<?= $root ?>/public/styles/style.css">    
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="">Cadastro</a>

        <?php if(isset($_SESSION['user_id'])) { ?>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>/user/create.php">Cadastrar</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>/listagem">Listar</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="" href="<?= $root ?>/auth/authActions.php?action=logout">Sair</a>
                </li>
            </ul>
        <?php } ?>
    </nav>
