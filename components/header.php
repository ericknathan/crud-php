<?php
    session_start();
    $root = "/ericknathan/crud-php";
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
                    <a class="nav-link" href="<?= $root ?>/cadastro">Cadastrar</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>/listagem">Listar</a>
                </li>
            </ul>

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $root ?>/auth/login/">Sair</a>
                </li>
            </ul>
        <?php } ?>
    </nav>
