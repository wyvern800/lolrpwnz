<?php
require_once('functions.php');
restrict_and_redirect_to('login/index.php');
edit();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Atualizar Usuário</h2>

    <form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
        <hr />
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo2">Username</label>
                <input type="text" class="form-control" name="user['username']" value="<?php echo $user['username']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Senha</label>
                <input type="text" class="form-control" name="user['password']" value="<?php echo $user['password']; ?>">
            </div>

            <div class="form-group col-md-7">
                <label for="campo1">Cargo</label>
                <input type="text" class="form-control" name="user['role']" value="<?php echo $user['role']; ?>">
            </div>

            <div class="form-group col-md-5">
                <label for="campo4">Nome Real</label>
                <input type="text" class="form-control" name="user['realname']" value="<?php echo $user['realname']; ?>">
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-5">
                <label for="campo5">Data de Nascimento</label>
                <input type="date" class="form-control" name="user['birthdate']" value="<?php echo $user['birthdate']; ?>">
            </div>

            <div class="form-group col-md-3">
                <label for="campo6">Endereço</label>
                <input type="text" class="form-control" name="user['address']" value="<?php echo $user['address']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo7">E-mail</label>
                <input type="text" class="form-control" name="user['email']" value="<?php echo $user['email']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo8">Telefone</label>
                <input type="text" class="form-control" name="user['phone']" value="<?php echo $user['phone']; ?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo9">Celular</label>
                <input type="text" class="form-control" name="user['mobile']" value="<?php echo $user['mobile']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Cadastro</label>
                <input type="text" class="form-control" name="user['created']" disabled placeholder="<?php echo $user['created']; ?>">
            </div>

            <div class="form-group col-md-2">
                <label for="campo10">Data de Modificação</label>
                <input type="text" class="form-control" name="user['modified']" disabled placeholder="<?php echo $user['modified']; ?>">
            </div>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>

<?php include(FOOTER_TEMPLATE); ?>