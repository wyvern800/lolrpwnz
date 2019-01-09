<?php

require_once('../config.php');
require_once(DBAPI);

$categories = null;
$categories = null;

/**
 *  Listagem de Clientes
 */
function index() {
    global $categories;
    $categories = find_all('categories');
}



function add() {
    if (!empty($_POST['category'])) {

        $today =
            date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $category= $_POST['category'];
        $category['status'] = 1;

        save('categories', $category);
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

        if (isset($_POST['category'])) {

            $category = $_POST['category'];

            update('category', $id, $category);
            header('location: index.php');
        } else {

            global $category;
            $category= find('categories', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
    global $category;
    $category = find('categories', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

    global $category;
    $category = remove('categories', $id);

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


