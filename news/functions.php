<?php

require_once('../config.php');
require_once(DBAPI);

$news = null;
$news = null;

/**
 *  Listagem de Clientes
 */
function index() {
    global $news;
    $news = find_all('news');
}



function add() {
    if (!empty($_POST['new'])) {

        $today =
            date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $new= $_POST['new'];
        $new['author'] = $_SESSION['UserName'];
        $new['status'] = 1;
        $new['modified'] = $new['created'] = $today->format("Y-m-d H:i:s");

        save('news', $new);
        header('location: index.php');
    }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        if (isset($_POST['new'])) {

            $new = $_POST['new'];

            update('new', $id, $new);
            header('location: index.php');
        } else {

            global $new;
            $new= find('news', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
    global $new;
    $new = find('news', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

    global $new;
    $new = remove('news', $id);

    header('location: index.php');
}

function clear_messages() {
    unset($_SESSION['message']);
    unset($_SESSION['type']);
}

function select_category() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    # here database details
    mysqli_select_db($con, DB_NAME);
    $result = mysqli_query($con, 'SELECT DISTINCT * FROM category WHERE status = 1 ORDER BY id DESC LIMIT  0,6');
    echo "<select class='form-control' name='categoryname'>";
    echo "<option value=''>Selecionar</option>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['id'] ."'>" . $row['categoryname'] ."</option>";
        }
    echo "</select>";
}

function select_category_edit() {
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    # here database details
    mysqli_select_db($con, DB_NAME);
    $result = mysqli_query($con, 'SELECT DISTINCT * FROM category WHERE status = 1 ORDER BY id DESC LIMIT  0,6');
    echo "<select class='form-control' name='categoryname'>";
    echo "<option value=''>Selecionar</option>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id'] ."'>" . $row['categoryname'] . "</option>";
    }
    echo "</select>";
}


