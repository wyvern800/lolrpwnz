<?php
require_once('../config.php');
require_once(DBAPI);
/**
 * Created by PhpStorm.
 * User: Matheus
 * Date: 26/12/2018
 * Time: 19:14
 */

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['username']) OR empty($_POST['password']))) {
    header("Location: index.php"); exit;
}
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_select_db(mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME), 'users');

$username = $_POST['username'];
$password = crypt($_POST['password'], MINI_SALT . SALT_COST . '$' . BIG_SALT . '$');

// Validação do usuário/senha digitados
$sql = "SELECT id, username, role FROM users WHERE (username = '".$username ."') AND (password2 = '". $password ."') AND (active = 1) LIMIT 1";
$query = mysqli_query($link, $sql) or die(mysqli_error($link));
if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    $_SESSION['message'] = "Login inválido ou usuário não encontrado.";
    $_SESSION['type'] = 'danger';
    echo $_SESSION['message']; exit;
} else {
    // Salva os dados encontados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);

    // Se a sessão não existir, inicia uma
    if (!isset($_SESSION)) session_start();

    // Salva os dados encontrados na sessão
    $_SESSION['UserID'] = $resultado['id'];
    $_SESSION['UserName'] = $resultado['username'];
    $_SESSION['UserRole'] = $resultado['role'];

    // Redireciona o visitante
    header("Location: ../index.php"); exit;
}
?>