<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LOLRPWNZ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL; ?>/assets/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <script type="text/javascript">
        $(document).ready(function(e) {
            var h = $('nav').height() + 20;
            $('body').animate({ paddingTop: h });
        });
    </script>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">LOLRPWNZ</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuários <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>users"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gerenciar Usu&aacute;rios</a></li>
                        <li><a href="<?php echo BASEURL; ?>users/add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Usu&aacute;rio</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-console" aria-hidden="true"></span> Comandos <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>commands"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gerenciar Comandos</a></li>
                        <li><a href="<?php echo BASEURL; ?>commands/add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Comando</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo BASEURL; ?>category"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gerenciar Categorias</a></li>
                        <li><a href="<?php echo BASEURL; ?>category/add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Categoria</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-font" aria-hidden="true"></span> Notícias <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo BASEURL; ?>news"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gerenciar Notícias</a></li>
                        <li><a href="<?php echo BASEURL; ?>news/add.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar Notícias</a></li>
                    </ul>
                </li>
            </ul>
            <!-- botoes de logar -->
            <ul class="nav navbar-nav navbar-right">
                <?php
                /*echo '<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';*/
                if (isset($_SESSION)) {
                    echo '<p class="navbar-text">Olá, <b>'.$_SESSION['UserName'].'</b></p>';
                    echo '<li><a href="'.BASEURL.'logout/index.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>';
                } else {
                    echo '<li><a href="'.BASEURL.'login/index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                }
                ?>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<main class="container">