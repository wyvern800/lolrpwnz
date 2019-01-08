<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');

if (isset($_GET['id'])){
    delete($_GET['id']);
} else {
    die("ERRO: ID não definido.");
}
?>