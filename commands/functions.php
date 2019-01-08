<?php

require_once('../config.php');
require_once(DBAPI);

$commands = null;
$commands = null;

/**
 *  Listagem de Clientes
 */
function index() {
    global $commands;
    $commands = find_all('commands');
}



function add() {
    if (!empty($_POST['command'])) {

        $today =
            date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $command = $_POST['command'];
        $command['modified'] = $command['created'] = $today->format("Y-m-d H:i:s");
        $command['category'] = $_POST['categoryname'];

        save('commands', $command);
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

        if (isset($_POST['command'])) {

            $command = $_POST['command'];
            $command['modified'] = $now->format("Y-m-d H:i:s");

            update('commands', $id, $command);
            header('location: index.php');
        } else {

            global $command;
            $command = find('commands', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
    global $command;
    $command = find('commands', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {

    global $command;
    $command = remove('commands', $id);

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
    $result = mysqli_query($con, 'SELECT * FROM categories WHERE status = 1 ORDER BY categoryname ASC LIMIT  0,6');
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
    $result = mysqli_query($con, 'SELECT DISTINCT * FROM categories WHERE status = 1 ORDER BY categoryname ASC LIMIT  0,6');
    echo "<select class='form-control' name='categoryname'>";
    echo "<option value=''>Selecionar</option>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['id'] ."'>" . $row['categoryname'] . "</option>";
    }
    echo "</select>";
}
