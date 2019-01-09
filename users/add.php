<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
add();
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
?>

    <title><?php echo WEBSITE_NAME?> - Adicionar Usuários</title>
<?php include(HEADER_TEMPLATE); ?>

    <h2>Novo Usuário</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">

            <div class="form-group col-md-7">
                <label for="campo4">Nome Real</label>
                <input type="text" class="form-control" name="user['realname']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="campo5">Data de Nascimento</label>
                <input type="date" class="form-control" name="user['birthdate']">
            </div>

            <div class="form-group col-md-3">
                <label for="campo6">Endereço</label>
                <input type="text" class="form-control" name="user['address']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo7">E-mail</label>
                <input type="email" class="form-control" name="user['email']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo8">Telefone</label>
                <input type="number" class="form-control" id="user['phone']" name="user['phone']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo9">Celular</label>
                <input type="number" class="form-control" id="user['mobile']" name="user['mobile']">
            </div>
        </div>
<hr>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo1">Cargo</label>
                <input type="int" class="form-control" name="user['role']" value="0">
            </div>

            <div class="form-group col-md-2">
                <label for="campo2">Nome de Usuário</label>
                <input type="text" class="form-control" name="user['username']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Senha</label>
                <input type="password" class="form-control" name="user['password']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Cria&ccedil;&atilde;o</label>
                <input type="text" class="form-control" name="user['created']" placeholder="<?php echo $today->format("Y-m-d H:i:s") ?>" disabled>
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Modifica&ccedil;&atilde;o</label>
                <input type="text" class="form-control" name="user['modified']" placeholder="<?php echo $today->format("Y-m-d H:i:s") ?>" disabled>
            </div>
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Adicionar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>